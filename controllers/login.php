<?php

class login extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render("login/index");
    }

    public function logIn(){
        $user = $_POST["email"];
        $pass = $_POST["password"];
        $userCheck = $this->model->userCheck($user);
          if($userCheck === false){
             header(BASE_URL);
          } else {
             $passCheck = password_verify($pass, $userCheck["pass"]);
             if($passCheck === true){
                session_start();
                $_SESSION["admin"] = $userCheck["name"];
                unset($_POST);
                 header("Location:" .BASE_URL . "/dashboard");
                 echo BASE_URL;
             } else {
                 echo "wrong Password";
             }
          }
    }
}