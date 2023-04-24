<?php

namespace Goosfraba\StravaSDK\Access;

use Goosfraba\StravaSDK\StravaApiBaseUrl;

/**
 * Represents the URL the user is redirected to for giving the access to their Strava resources
 */
final class RequestAccessUrl implements \Stringable
{
    private string $clientId;
    private string $redirectUrl;
    private string $responseType;
    private ApprovalPrompt $approvalPrompt;
    private array $scopes;
    private ?string $state;

    /**
     * @param string $clientId the client ID
     * @param string $redirectUrl the URL the user is redirected to when gives the access
     * @param Scope[] $scopes the scopes of the resources the user is to give the permissions to
     * @param ?string $state the container for application data passed at the redirect URL after the user gives the permission
     * @param ?ApprovalPrompt $approvalPrompt the prompt mode ("auto" by default)
     */
    public function __construct(
        string $clientId,
        string $redirectUrl,
        array $scopes = [],
        ?string $state = null,
        ?ApprovalPrompt $approvalPrompt = null
    ) {
        $this->clientId = $clientId;
        $this->redirectUrl = $redirectUrl;
        $this->responseType = ResponseType::code();
        $this->approvalPrompt = $approvalPrompt ?? ApprovalPrompt::auto();
        $this->scopes = $scopes ?: [Scope::general()];
        $this->state = $state;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf(
            "%s/oauth/authorize?client_id=%s&redirect_uri=%s&approval_prompt=%s&scope=%s&state=%s&response_type=%s",
            StravaApiBaseUrl::create()->authBaseUrl(),
            $this->clientId,
            urlencode($this->redirectUrl),
            $this->approvalPrompt,
            urlencode(implode(",", $this->scopes)),
            $this->state,
            $this->responseType
        );
    }
}
