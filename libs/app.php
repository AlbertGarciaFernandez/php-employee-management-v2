<?php
class App{

    function __construct()
    {
      $url = isset($_GET["url"]) ? $_GET["url"]: null;
      $url = rtrim($url, "/");
      $url = explode("/", $url);

    if(empty($url[0])){
      $filecontroller = "controllers/LoginController.php";
      require_once $filecontroller;
      $controller = new Main();
      return false;
    }

      $filecontroller = "controllers/" . $url[0] . ".php";
      if(file_exists($filecontroller)){
        require_once $filecontroller;
        $controller = new $url[0];

if(isset($url[1])){
  $controller->{$url[1]}();
}

      } else {
          require_once "controllers/errors.php";
$controller = new Errors();
      }
    }
}