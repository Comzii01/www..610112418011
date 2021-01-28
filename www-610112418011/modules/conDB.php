<?php

//mysqli_report(MYSQLI_REPORT_ALL ^ MYSQL_REPORT_STRICT);

use FFI\Exception;

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_test";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->set_charset("utf8");
}catch (Exception $e) {
    echo $e->getMessage();
}

?>