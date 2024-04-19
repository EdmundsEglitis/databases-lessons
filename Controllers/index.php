<?php
require "Database.php";
$config = require "config.php";




$query = "SELECT * FROM catalog"; 
$params = [];
$db = new Database($config);
$books = $db->execute($query, $params)->fetchALL();


if (isset($_SESSION["Admin"])) { 
    echo "sveiks admin";
} 


require "views/index_view.php";


//  var_dump($events);