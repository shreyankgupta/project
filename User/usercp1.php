<?php
session_start();
$email=$_SESSION["email"];
$password=$_POST["txtpass"];
$newpassword=$_POST["txtnewpass"];

$conpassword=$_POST["txtconpass"];




if($newpassword==$conpassword)
{
    require 'databaseuser.php';
    $obj=new database;
    $result=$obj->getCp($email,$password,$newpassword);
    if($result===true){
    header('location:userlogin.php');
}
}
else
{
    echo "Not Successful";
}


?>
