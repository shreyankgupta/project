<DOCTYPE html>
<html>
<head>

<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="styleshsheet" href="../css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>






</head>
<body>



<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$conn= new mysqli("localhost","root","","test1");
$email=$_POST["txtemail"];
$mobile=$_POST["txtmobile"];
$password=$_POST["txtpass"];
$name=$_POST["txtname"];
$add=$_POST["txtaddress"];
$image=$_POST["txtimage"];

$sql="insert into user_tbl values('". $email ."','". $name ."','". $password ."','". $mobile ."','". $add ."','". $image ."')";
if($conn->query($sql)===true)
{
    header('location:userlogin.php');
}
else
{ 
    echo "insert into user_tbl values('". $email ."','". $name ."','". $password ."','". $mobile ."','". $add ."','". $image ."')";
   // echo "insert into student values(". $rollno .",'". $name ."','". $mobileno ."','". $fees ."','". $gender ."','". $year ."')";
    echo "unsuccessfull";
}

















}
?>



<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
  </div>
</nav>

</div>
<div>
<div class="jumbotron">
  <h1>Create New Account</h1>
  <br>
  <div class="col-md-5">
  </div>
  <div class="input-group input-group-lg">
   <input type="text" class="form-control" placeholder="Name" aria-describedby="sizing-addon1" name="txtname">
  <br>
  <br>
  <br>
  
  
  <input type="text" class="form-control email" placeholder="Email" aria-describedby="sizing-addon1" name="txtemail">
  <br>
  <br>
  <br>
  

   <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="txtpass">
   <br>
   <br>
   <br>
   
    <input type="text" class="form-control" placeholder="mobile" aria-describedby="sizing-addon1" name="txtmobile">


<br>
<br>
<br>
<input type="text" class="form-control" placeholder="address" aria-describedby="sizing-addon1" name="txtaddress">
 <br>
<br>
<br>
<input type="file" class="form-control" placeholder="image" aria-describedby="sizing-addon1" name="txtimage">

</div>

<div class="btn-group role="group" ">
  <button type="submit" class="btn btn-primary btn-lg" size="10" >
  Sign Up
    
  </button>
  </div>
  <div class="btn-group role="group" ">
  <button type="reset" class="btn btn-primary btn-lg" size="10" >
 Cancel
    
  </button>
  </div>
 

<div class="col-md-5">
  </div>



<br>

<br>
<br>
<br>
<br>
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