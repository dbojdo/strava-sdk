<?php

namespace Goosfraba\StravaSDK\Http\Buzz;

use Buzz\Middleware\MiddlewareInterface;
use Goosfraba\StravaSDK\Auth\AuthToken;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class AuthMiddleware implements MiddlewareInterface
{
    private AuthToken $oAuthToken;

    public function __construct(AuthToken $oAuthToken)
    {
        $this->oAuthToken = $oAuthToken;
    }

    public static function create(AuthToken $oAuthToken): self
    {
        return new self($oAuthToken);
    }

    public function handleRequest(RequestInterface $request, callable $next)
    {
        return $next(
            $request->withHeader('Authorization', sprintf('Bearer %s', $this->oAuthToken->accessToken()))
        );
    }

    public function handleResponse(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        return $next($request, $response);
    }
}
