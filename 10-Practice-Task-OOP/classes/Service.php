<?php

class Service
{
    private $employee;
    private $client;
    private $type;  
    private $time;

    public function __construct($employee, $client, $type)
    {
        $this->employee = $employee;
        $this->client = $client;
        $this->type = $type;
        $this->time = new DateTime();      
    }

}