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
             } else {
                header("Location:". BASE_URL . "/login?loginError");
             }
          }
    }
    public function logout(){
        session_start();

        $_SESSION = array();
    
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
    
        session_destroy();
    
        header("Location:". BASE_URL . "/login?logOut");
    
    
    }
}
