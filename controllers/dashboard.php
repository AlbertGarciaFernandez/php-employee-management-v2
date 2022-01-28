<?php
class dashboard extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("dashboard/dashboard");
    }
}