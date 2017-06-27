
<?php
session_start();
  include 'menu.php';    

?>
<!DOCTYPE html>
<html>
    <head>
   <script src="../js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>

    </head>
    <body  >
<?php

$email="";
$name="";
$mobile="";
$password="";
$cpassword="";
$address="";
$image="";
 $conn=new mysqli("localhost","root","","test1");

$email=$_SESSION["email"];
    $result=$conn->query("select * from user_tbl where email='".$email."'");
  

$row=$result->fetch_assoc();


$email=$row["email"];
$name=$row["name"];
$mobile=$row["mobile"];
$password=$row["password"];
$address=$row["address"];
$image=$row["image"];
    
    


?>





<form method="post" action="userupdate1.php">
<div class="input-group input-group-lg">
<h4>Email:-</h4><input type="text" class="form-control" name="txtemail" placeholder="Email-id" value=<?php echo $email ?>><br><br><br>
<h4>Name:-</h4><input type="text" class="form-control" name="txtname" placeholder="name" value=<?php echo $name ?>><br><br><br>
<h4>Mobile_no:-</h4><input type="text" class="form-control" name="txtmobile" placeholder="mobile no" value=<?php echo $mobile ?>><br><br><br>
<h4>Password:-</h4><input type="text" class="form-control" name="txtpass" placeholder="password" value=<?php echo $password ?>><br><br><br>
<h4>Address:-</h4><input type="text" class="form-control" name="txtaddress" placeholder="Address" value=<?php echo $address ?>><br><br><br>

<input type="file" name="image" value=<?php echo $image ?>>
<input type="submit" name="submit"  class="btn btn-primary" value="Update">
</div>
</form>     
    </body>
    </html>