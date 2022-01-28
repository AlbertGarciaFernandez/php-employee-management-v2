<?php
class App{

    function __construct()
    {
      $url = isset($_GET["url"]) ? $_GET["url"]: null;
      $url = rtrim($url, "/");
      $url = explode("/", $url);

    if(empty($url[0])){
      $filecontroller = "controllers/login.php";
      require_once $filecontroller;
      $controller = new login();
      $controller->loadModel($url[0]);
      return false;
    }

      $filecontroller = "controllers/" . $url[0] . ".php";
      if(file_exists($filecontroller)){
        require_once $filecontroller;
        $controller = new $url[0];
        $controller->loadModel($url[0]);

if(isset($url[1])){
  $controller->{$url[1]}();
}

      } else {
          require_once "controllers/errors.php";
$controller = new Errors();
      }
    }
}