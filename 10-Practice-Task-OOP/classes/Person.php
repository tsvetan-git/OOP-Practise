<?php

abstract class Person
{
    private $name;
    private $EGN;

    public function __construct($name, $EGN)
    {
        $this->name = $name;
        $this->EGN = $EGN;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEGN()
    {
        return $this->EGN;
    }

}