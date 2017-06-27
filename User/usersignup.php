<?php 
session_start();
?>

<html>
<head>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" >
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js" ></script>

</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") 
  {
		if($_POST["txtpassword"]===$_POST["txtcpassword"])
		{
			$cperr=" ";
      $cperrshow="hidden";
      $cp=$_POST["txtcpassword"];
      $_SESSION["cp"]=$cp;
      
		}
		else
		{
			$cperr="Password Dosen't Match ";
			$cperrshow=" ";
		}
  }

?>


<div class="row">
    <h1><center> Sign up Form </center></h1>
</div>

<div class="container-fluid">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <font color="white"><h1> Create Account </h1></font>
    </div>
  </div>
</nav>
</div>

<div class="container-fluid">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
				<ul class="container-fluid">
					<h2>New Account:</h2>
					<li>
                        
						<input type="email" class="form-control" placeholder="E-mail" name="txtname" required \><br>
						
						
					</li> 
					<li>
						<input type="text" class="form-control" placeholder="Username" name="txtemail" required \><br>
						
						
					</li> 
					<li>
						<input type="password" class="form-control" placeholder="Password" name="txtpassword" required \><br>
						
					</li> 
					<li>
						<input type="password"class="form-control" placeholder="Confirm Password" name="txtcpassword" required \><br>
						
					</li> 
                    <li>
						<input type="number"class="form-control" placeholder="Mobile No" name="txtmobile" required \><br>
						
					</li> 
                    <li>
						<input type="text"class="form-control" placeholder="Address" name="txtaddress" required \><br>
						
					</li> 
                    <li>
						<input type="file"class="form-control" placeholder="Image" name="img" required \><br>
						
					</li> 
					
					<input type="submit" class="btn btn-success" value="Create Account">
					<button class="btn btn-primary"><a href="userlogin.php">Cancle</a></button>
					<br>
						
				</ul>
				
				
					
			</form>

            
</div>

<div class="container-fluid">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-footer">
        <font color="white"><h1>Thank You To Join With Us </h1></font>
    </div>
  </div>
</nav>
</div>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$email="";
$name="";
$mobile="";
$password="";
$address="";
$cpassword="";
$img="";
    
$email=$_POST["txtemail"];
$name=$_POST["txtname"];
$password=$_POST["txtpassword"];
$mobile=$_POST["txtmobile"];
$address=$_POST["txtaddress"];
$img=$_POST["img"];;

require 'databaseuser.php';
$obj= new database();
$result=$obj->getSignup($email,$name,$password,$mobile,$address,$img);

if($result===true){
    echo "successful";
    header('location:userlogin.php');
}
else
{
    echo "not success";
    echo "insert into user_tbl values('". $email ."','". $name ."','". $password ."','". $mobile ."','". $address ."','". $img ."')";
}
}

?>


</body>
</html>