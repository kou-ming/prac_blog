<?php
header('content-type:text/html;charset=utf-8');
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "demo";

$mysqli = new mysqli($servername, $user, $password, $dbname);

if ($mysqli->connect_error) {
    die("連結失敗： " . $mysqli->connect_error);
}
$mysqli->set_charset('utf8');