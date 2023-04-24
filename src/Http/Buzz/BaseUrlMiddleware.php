<?php

namespace Goosfraba\StravaSDK\Http\Buzz;

use Buzz\Middleware\MiddlewareInterface;
use Goosfraba\StravaSDK\StravaApiBaseUrl;
use Nyholm\Psr7\Uri;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class BaseUrlMiddleware implements MiddlewareInterface
{
    private string $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public static function forAuth(): self
    {
        return new self(StravaApiBaseUrl::create()->authBaseUrl());
    }

    public static function forApi(): self
    {
        return new self(StravaApiBaseUrl::create()->apiBaseUrl());
    }

    public static function create(string $baseUrl): self
    {
        return new self($baseUrl);
    }

    public function handleRequest(RequestInterface $request, callable $next)
    {
        $uri = $request->getUri();

        if (!$uri->getHost()) {
            $request = $request->withUri(new Uri($this->baseUrl . '/' . ltrim($request->getUri(), "/")));
        }

        return $next($request);
    }

    public function handleResponse(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        return $next($request, $response);
    }
}
