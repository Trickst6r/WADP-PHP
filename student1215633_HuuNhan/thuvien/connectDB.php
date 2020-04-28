<?php

/* 
Ham ket noi den  CSDL ten [1907db], tia khoan dang nhap: root, password: 
 */

$serverDB = "localhost:3306";
$dbName = "1907db";
$username ="root";
$password ="";

$link = mysqli_connect($serverDB, $username, $password, $dbName);

if($link == NULL){
    echo " Loi sai ket noi !!!!";
}
?>

