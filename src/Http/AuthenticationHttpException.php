<?php

namespace Goosfraba\StravaSDK\Http;

use Goosfraba\StravaSDK\Auth\AuthToken;
use Goosfraba\StravaSDK\Dto\Fault;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class AuthenticationHttpException extends GenericApiException
{
}
