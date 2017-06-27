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
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $conn=new mysqli("localhost","root","","test1");
   if($conn->connect_error)
    {
        echo "connection error";
    } 
    $email=$_POST["txtemail"];
    $password=$_POST["txtpassword"];
    require 'databaseuser.php';
$obj= new database();
$result=$obj->getLoginUser($email,$password);


if($result->num_rows==1){
 $row=$result->fetch_assoc();
 $_SESSION["email"]=$email;
  header('location:prouser.php');
/* if($row["flag"]=="yes")
{
  echo "Successful";
  
  $_SESSION["password"]=$password;
 
}
else
{
echo "not varified <a href=emaildemo.php>resend</a>";
}*/
}
else
{
  echo '<div class="alert alert-danger" role="alert"><h1><center>Enter Valide Detail</center></h1>';
  echo '</br>';
  echo '</div>';
}
}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
  </div>
</nav>



<div class="jumbotron">
 <center> <h1>Log In Form</h1></center>
  
  <br>
<div class="col-md-5">

</div>



 <div class="input-group input-group-lg">

  <input type="email" name="txtemail" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" required \>
<br>
    <br>
    <br>
  <input type="password" name="txtpassword" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required \>

  <br>
  <br>
  <br>
<a href="userforgot.php">Forgot Password ?</a>  <a href="usersignup.php"> New User </a>
<a href="../adminlogin.php"> Admin Login </a>
</div>

<br>

<div class="btn-group">
  <button type="submit" class="btn-lg btn-primary">
    Log In
  </button>

</div>

<div class="col-md-5">

</div>
</div>



<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
  </div>
</nav>
</div>    
</form>
</body>
</html>