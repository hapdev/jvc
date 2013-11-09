<?php

namespace Hapdev\Jvc;

use Hapdev\Http\Client\Client as HttpClient;

/**
 * @author Hapdev
 */
class Jvc
{
    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @param HttpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->setHttpClient($httpClient);
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function setId(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }
}
