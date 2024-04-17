<?php

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];



$routes=[
    "/"=>"Controllers/index.php",
    "/create"=>"Controllers/create.php",
    "/show"=>"Controllers/show.php",
    "/update"=>"Controllers/update.php",
    "/register" => "Controllers/register.php",
    "/login" => "Controllers/login.php",
    "/logout" => "Controllers/logout.php"
  ];
  

  if (array_key_exists($url,$routes)){
    require $routes[$url];
  }
  session_start();
?>