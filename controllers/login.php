<?php

require "./Database.php";
require "./Validator.php";
$config = require("./config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::email($_POST["email"])) {
        $errors["email"] = "nepareizs epasta formats";
    }
    
    $query = "SELECT * FROM users WHERE email = :email";
    $params = [
        ":email" => $_POST["email"]
    ];
    $user = $db->execute($query, $params)->fetch();
    if (!$user || !password_verify($_POST["password"], $user["password"])) {
        $errors["email"] = "Kkas nav labi";
    }

    if (empty($errors)) {
        $_SESSION["user"] = true;
        $_SESSION["email"] = $_POST["email"];
    }
}
    
        
        require "views/login_view.php";