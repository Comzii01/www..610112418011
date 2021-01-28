<?php
require "../modules/conDB.php";

echo $email - $_POST['email'];

try{
    $sql = "DELETE FROM tb_member WHERE email = '$email' ";
}catch(Exception $e){
    echo $e->getMessage();
}