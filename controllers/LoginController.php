<?php

class loginController extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("login/index");
    }

    public function logIn(){
        $user = $_POST["email"];
        $pass = $_POST["password"];
        $userCheck = $this->model->userCheck($user);
        if($userCheck !== false){
            print_r($userCheck);
        } else {
            echo "Null motherfucker";
        }
    }
}