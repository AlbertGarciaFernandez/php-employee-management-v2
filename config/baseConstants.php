<?php
$documentRoot = getcwd();
//Base path
DEFINE("BASE_PATH", $documentRoot);
//base URL
 $uri = $_SERVER["REQUEST_URI"];
 if (isset($uri) && $uri !== null){
 $uri = substr($uri, 1);
 $uri = explode("/", $uri);
 $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0];
 } else {
     $uri = null;
 }

 define("BASE_URL", $uri);
// define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
// define('DOMAIN', $_SERVER['HTTP_HOST']);
// define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');