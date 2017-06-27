<?php

session_start();
?>

<html>
<head>

<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css" >


<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >


<script src="../js/bootstrap.min.js" ></script>


</head>

<body>

  <?php
  include 'menu.php';
$email="";
$password="";

    
    $email=$_SESSION["email"];
   
    

   require 'databaseuser.php';
$obj= new database();
$result=$obj->getProfileUser($email);


    $row=$result->fetch_assoc();
$name=$row["name"];
$image=$row["image"];
$email=$row["email"];
$mobile=$row["mobile"];
$address=$row["address"];

?>

    <form action="usercp1.php" method="post">
<div class="row">
<div class="container">
<table class="table">
<tr>
<td>Old Password :<td><input type="password" name="txtpass" required  \><br>
<tr>
<td>New Password :<td><input type="password" name="txtnewpass" required  \><br>
<tr>
<td>Confirm New Password :<td><input type="password" name="txtconpass" required  \> <br>
<tr>
<td colspan="2">
<input type="submit" name="btnupdate" value="Confirm Change" class="btn btn-primary">
</table>
</div>
</div>

</form>

</body>
</html>