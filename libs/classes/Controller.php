<?php

class Controller{
    function __construct()
    {
        $this->view = new View();
    }

    public function logIn(){
        echo "Hola soz login";
    }
}