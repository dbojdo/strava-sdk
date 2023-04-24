<?php

namespace Goosfraba\StravaSDK\Http;

use Goosfraba\StravaSDK\Dto\Fault;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GenericApiException extends \RuntimeException
{
    private RequestInterface $request;

    private ?ResponseInterface $response;

    private ?Fault $fault;

    public function __construct(
        RequestInterface $request,
        ?ResponseInterface $response,
        ?Fault $fault,
        ?\Throwable $previous = null
    ) {
        parent::__construct("The API error occurred.", 0, $previous);

        $request->getBody()->rewind();
        $this->request = $request;
        if ($response) {
            $response->getBody()->rewind();
        }

        $this->response = $response;
        $this->fault = $fault;
    }

    public function request(): RequestInterface
    {
        return $this->request;
    }

    public function response(): ?ResponseInterface
    {
        return $this->response;
    }

    public function fault(): ?Fault
    {
        $this->fault;
    }
}
