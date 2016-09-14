<?php

class Declaration
{
    private $client;
    private $assetsList;
    private $time;

    public function __construct(Client $client, $assetsList)
    {
        $this->client = $client;
        $this->assetsList = $assetsList;
        $this->time = new DateTime();
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getAssetsList()
    {
        return $this->assetsList;
    }

    public function getTime()
    {
        return $this->time;
    }
}