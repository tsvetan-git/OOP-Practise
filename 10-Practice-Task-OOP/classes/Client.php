<?php

class Client extends Person
{
    private $assetsList;
    private $proxy;

    //overriding && posrednika po default e null
    public function __construct($name, $EGN, $assetsList, Client $proxy = null)
    {
        parent::__construct($name, $EGN);
        $this->assetsList = $assetsList;
        $this->proxy = $proxy;
    }

    //return array
    public function getAssetsList()
    {
        return $this->assetsList;
    }

    public function getProxy()
    {
        return $this->proxy;
    }

}