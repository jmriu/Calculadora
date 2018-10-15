<?php
$host= $_SERVER["HTTP_HOST"];
$url= "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"].'views/calcView.php';

header('Location: '.$url);