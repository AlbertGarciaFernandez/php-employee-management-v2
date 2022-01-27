<?php
class View{
    function __construct()
    {
$this->message = "Error message";
    }
    public function render($name){
        require "views/" . $name . ".php";
    }
}