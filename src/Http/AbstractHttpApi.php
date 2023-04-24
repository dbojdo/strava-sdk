<?php

namespace Goosfraba\StravaSDK\Http;

use Buzz\Browser;
use Goosfraba\StravaSDK\Dto\Fault;
use Goosfraba\StravaSDK\Http\Buzz\BrowserFactory;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Nyholm\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractHttpApi
{
    private BrowserFactory $browserFactory;
    private SerializerInterface $serializer;

    public function __construct(BrowserFactory $browserFactory, ?SerializerInterface $serializer = null)
    {
        $this->browserFactory = $browserFactory;
        $this->serializer = $serializer ?? SerializerBuilder::create()->build();
    }

    protected function get(string $url, string $resultType)
    {
        $browser = $this->getBrowser();
        $response = $browser->get($url);

        if ($response->getStatusCode() >= 300) {
            $this->handlerResponseError($browser->getLastRequest(), $response);
        }

        return $this->deserializeResponse($response, $resultType);
    }

    protected function executeGet(string $url, array $queryParams = [], ?ResultType $resultType = null, array $headers = [])
    {
        $url .= $queryParams ? ("?" . $this->buildQueryParams($queryParams)) : "";

        return $this->executeRequest(
            new Request(
                "GET",
                $url,
                $headers
            ),
            $resultType
        );
    }

    protected function executePost(string $url, array $queryParams = [], ?BodyData $data = null, ?ResultType $resultType = null, array $headers = [])
    {
        $url .= $queryParams ? ("?" . $this->buildQueryParams($queryParams)) : "";
        if ($data && $data->format() === "form") {
            return $this->postForm();
        }

        $request = new Request(
            "POST",
            $url,
            $headers
        );
    }

    protected function post(string $url, $data = null, ?string $resultType = null)
    {
        $browser = $this->getBrowser();
        $response = $browser->post($url, [], (string)$data);

        if ($response->getStatusCode() >= 300) {
            $this->handlerResponseError($browser->getLastRequest(), $response);
        }

        return $resultType ? $this->deserializeResponse($response, $resultType) : null;
    }

    protected function put(string $url, $body, string $resultType)
    {
        $browser = $this->getBrowser();

        $response = $browser->put($url, ["Content-Type"=>"application/json"], $body);
        if ($response->getStatusCode() >= 300) {
            $this->handlerResponseError($browser->getLastRequest(), $response);
        }

        return $this->deserializeResponse($response, $resultType);
    }

    protected function postForm(string $url, array $data, string $resultType)
    {
        $browser = $this->getBrowser();
        $response = $browser->submitForm($url, $data);

        if ($response->getStatusCode() >= 300) {
            $this->handlerResponseError($browser->getLastRequest(), $response);
        }

        return $this->deserializeResponse($response, $resultType);
    }

    private function deserializeResponse(ResponseInterface $response, ResultType $resultTyp)
    {
        return $this->serializer->deserialize(
            $response->getBody()->getContents(),
            (string)$resultTyp,
            $resultTyp->format()
        );
    }

    private function handlerResponseError(RequestInterface $request, ?ResponseInterface $response)
    {
        $fault = null;
        if ($response) {
            try {
                $fault = $this->deserializeResponse($response, ResultType::json(Fault::class));
            } catch (\Exception $e) {
            }
        }

        if (!$response) {
            throw new GenericApiException($request, $response, $fault);
        }

        switch ($response->getStatusCode()) {
            case 401:
                throw new AuthenticationHttpException($request, $response, $fault);
            default:
                throw new GenericApiException($request, $response, $fault);
        }
    }

    protected function getBrowser(): Browser
    {
        return $this->browserFactory->create();
    }


    /**
     * Builds query string params from key => value array
     *
     * @param array $params the key => value array the query string is to be built from
     * @return string the query string
     */
    protected function buildQueryParams(array $params): string
    {
        $queryStringParams = [];
        foreach ($params as $key => $value) {
            $queryStringParams[] = sprintf('%s=%s', $key, urlencode($value));
        }

        return implode("&", $queryStringParams);
    }

    private function executeRequest(Request $request, ?ResultType $resultType)
    {
        try {
            $response = $this->getBrowser()->sendRequest($request);
        } catch (\Throwable $e) {
            throw new GenericApiException($request, null, null, $e);
        }

        if ($response->getStatusCode() >= 300) {
            $this->handlerResponseError($request, $response);
        }

        if ($resultType) {
            return $this->deserializeResponse($response, $resultType);
        }

        return $response;
    }
}
