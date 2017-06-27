<html>
<head>

<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css" >


<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >


<script src="../js/bootstrap.min.js" ></script>


</head>
<body>
<form action="../emaildemo.php" method="post">

<div class="input-group input-group-lg">

  <input type="email" name="txtemail" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" required \>
<br>

<button>Submit</button>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

{
require 'databaseuser.php';
$obj=new database();

$email=$_POST["txtemail"];
$result=$obj->forgotUser($email);

if($result->num_rows==1)
{
  $row=$result->fetch_assoc();
  echo $email;
  echo $row["password"];

}

}
}

?>

</body>
</html>