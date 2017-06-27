<html>
<head>

<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>


</head>


<body>
 <?php

$email=$_POST["txtemail"];
$name=$_POST["txtname"];

$password=$_POST["txtpass"];
$mobile=$_POST["txtmobile"];
$image=$_POST["image"];
$address=$_POST["txtaddress"];
    
    $conn=new mysqli("localhost","root","","test1");
    

    $sql="update user_tbl set name='". $name ."',mobile='". $mobile ."',password='". $password ."',address='". $address ."',image='". $image ."'where email='". $email ."'";

if($conn->query($sql)===true){
   header('location:userprofile.php');
}
else
{
    echo "not success";
     echo $sql;
}


?>
</body>
</html>