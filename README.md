# Strava SDK
This packages provides high level SDK for Strava API

## Installation

Install the package via *composer*

```bash
composer require goosfraba/strava-sdk
```

## Usage
This sections shows how to use the SDK

### Request Access URL
The SDK provides a handy way to generate a request access URL (e.g. for Connect with Strava button).

```php
use Goosfraba\StravaSDK\Access\RequestAccessUrl;
use Goosfraba\StravaSDK\Access\Scope;
use Goosfraba\StravaSDK\Access\ApprovalPrompt;

$url = (string)(new RequestAccessUrl(
    "231243", // your app client ID
    "https://your-app.com/strava/access-granted", // the callback URL
    [
        Scope::general(true), // general scope "read_all"
        Scope::profile(false), // profile resource scope "read"
        Scope::activity(false, true), // activity resource scope "read" and "write",
    ], // the list of the scopes, select whatever your app needs
    null, // optional: the state of your application (passed to your callback URL in query string) 
    ApprovalPrompt::auto() // optional: the approval prompt mode, "auto" by default
));

```

### Authentication (Connect with Strava)

In order to use the API you need to utilise the *code* passed into your callback URL.
Below you can find an example controller that handles the callback URL.

Disclaimer:
This controller is for demo purpose only, to show how the flow and particular SDK components work.
It's not in a production shape in any way.

```php
use Goosfraba\StravaSDK\Auth\AuthApi;
use Goosfraba\StravaSDK\Auth\AuthApiFactory;
use Goosfraba\StravaSDK\Auth\ClientCredentials;

class StravaCallbackController
{
    private AuthApi $authApi;
    
    public function __construct(AuthApi $authApi)
    {
        $oAuthApiFactory = new AuthApiFactory();
        $this->authApi = $oAuthApiFactory->create(
            new ClientCredentials("your app id", "your app secret")
        );
    }
    
    /**
     * 
     */
    public function accessGranted($request)
    {
        // "code" from the query string of the URL
        $tokenResponse = $this->authApi->authorise($request["code"]);
        
        // "state" from the query string of the callback URL
        $state = $request["state"]; // whatever was passed into the access request URL
        
        /**
         * The athlete that gave the permissions.
         * Link it with your user.
         */
        $athlete = $tokenResponse->athlete()
        
        /**
         * The OAuth token to be used in further queries.
         * Save it along with the user.
         */           
        $oAuthToken = $tokenResponse->token(); 
    }
}
```

### OAuthApi

This API allows to authorize your app, refresh the access token and de-authorize your app.

#### Create the OAuthAPi

```php
use Goosfraba\StravaSDK\Auth\AuthApiFactory;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Goosfraba\StravaSDK\Auth\ClientCredentials;

/**
 * The event dispatcher is an important component in the flow od the API usage.
 * The APIs support automatic token refresh, and you want to make sure you store the latest viable token.
 * More in the section "Automatic Token Refresh"
 */
$oAuthApiFactory = new AuthApiFactory();

$oAuthApi = $oAuthApiFactory->create(new ClientCredentials("your app id", "your app secret"));
```

#### Authorization
Authorization process generates an OAuth token and returns the athlete's details

```php
/** @var \Goosfraba\StravaSDK\Auth\AuthApi $oAuthApi */
$code = "32443534safgfgsfgfssew3224323"; // the code from the callback URL
$tokenResponse = $oAuthApi->authorise($code);
$token = $tokenResponse->token();
$athlete = $tokenResponse->athlete();
```

#### De-authorization
De-authorization process unlinks your application from the athlete's Stava account

```php
/** @var \Goosfraba\StravaSDK\Auth\AuthApi $oAuthApi */
/** @var \Goosfraba\StravaSDK\Auth\AuthToken $token */
$oAuthApi->deAuthorize($token);
```

#### Token refresh
Expired access token needs to be refreshed every now and then.

```php
/** @var \Goosfraba\StravaSDK\Auth\AuthApi $oAuthApi */
/** @var \Goosfraba\StravaSDK\Auth\AuthToken $token */
$newToken = $oAuthApi->refreshToken($token);
```

#### Automatic token refresh
All the APIs support the automatic token refresh. You want to make sure you've got stored the latest viable token.
In order to do this, you need to provide the `OAuthTokenCallback` implementation into the `OAuthApi`.

An example implementation:

```php
use Goosfraba\StravaSDK\Auth\TokenCallback\OAuthTokenCallback;
use Goosfraba\StravaSDK\Auth\AuthToken;

final class YourAppOAuthTokenCallback implements OAuthTokenCallback
{
    private UserRepository $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function onAuthorise(string $code, AuthorisationResponse $tokenResponse): void
    {
        $user = new User(
            // fill up the data from the token response
        );
        $user->updateStravaToken($tokenResponse->token());
        
        $this->userRepository->save($user);
    }

    public function onDeAuthorise(AuthToken $token): void
    {
        $user = $this->userRepository->findByStravaToken($token);
        if (!$user) {
            return;
        }
        
        $user->deAuthoriseStrava();
        $this->userRepository->save($user);
    }

    public function onTokenRefresh(AuthToken $newToken, AuthToken $oldToken): void
    {        
        $user = $this->userRepository->findByStravaToken($oldToken);        
        $user->updateStravaToken($newToken);
        $this->userRepository->save($user);
    }
}
```

To register your token callback:

```php
use Goosfraba\StravaSDK\Auth\AuthApiFactory;
/** @var UserRepositroy $userRepository */

$oAuthApiFactory = new AuthApiFactory(
    new YourAppOAuthTokenCallback($userRepository)
);
```

### ApiFactory component

This component creates an instances of particular APIs.

```php
use Goosfraba\StravaSDK\ApiFactory;use Goosfraba\StravaSDK\Auth\AuthToken;use Goosfraba\StravaSDK\Http\Buzz\AuthenticatedBrowserFactory;

$apiFactory = new ApiFactory(
    new AuthenticatedBrowserFactory(
        $oAuthApi,
        new AuthToken("refresh token", "access token")
    )
);
```

### AthletesApi

#### Create the AthletesApi

```php
use Goosfraba\StravaSDK\ApiFactory;

/** @var ApiFactory $apiFactory */

$athletesApi = $apiFactory->athletesApi();
```

#### Supported operations

 * **getAuthenticatedAthlete** - gets the details of the authenticated athlete 

### ActivitiesApi

#### Create the ActivitiesApi

```php
use Goosfraba\StravaSDK\ApiFactory;

/** @var ApiFactory $apiFactory */

$activitiesApi = $apiFactory->activitiesApi();
```

#### Supported operations

* **listAthleteActivities** - lists the activities of authenticated athlete
* **getActivity** - gets a single activity by its ID
* **createActivity** - creates a new activity
* **updateActivity** - updates an existing activity
* **listActivityComments** - lists the comments of given activity
* **listActivityKudoers** - lists the kudoers of given activity
* **listActivityLaps** - lists the laps of given activity
* **listActivityZones** - lists the zones of given activity



