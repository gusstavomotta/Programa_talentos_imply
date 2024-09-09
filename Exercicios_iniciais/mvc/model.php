<?php

class Model
{

    public $String;

    public function __construct()
    {
        $this->String = "olá mundo";
    }
    public function get_string()
    {
        return $this->String;
    }
}
