<?php
class Errors extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("error/index");
        $this->view->message = "Big big no no.";
     // echo "<p>Failed to load resource.</p>" ;
    }
}