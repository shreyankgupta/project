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
    <body  >
    <?php
    include 'menu.php';

   $email=$_SESSION["email"];
   
   require 'databaseuser.php';
$obj= new database();
$result=$obj->getProfileUser($email);
if($result===true){
   
}

?>

<form action="userupdate.php" method="post">
<div class="container">
<table class="table" align="center">
<thead>
<tr>
<td> <h1>Profile</h1>
</thead>
<?php
$row=$result->fetch_assoc();
echo '<tr>';
echo '<th>Profile Pic :';
echo '<td><div class="row">';
  echo'<div class="col-sm-6 col-md-4">';
    echo'<div class="thumbnail">';
      echo'<img src="'.$row["image"].'" alt="left">';
   

   echo '</div>';
  echo '</div>';
echo '</div>';

echo '<tr>';
echo '<th> User Name :';
echo '<td> <h2>'.$row["name"].'</h2>';

echo '<tr>';
echo '<th> Email Address :';
echo '<td>'.$row["email"];

echo '<tr>';
echo '<th> Mobile NO :';
echo '<td>'.$row["mobile"];

echo '<tr>';
echo '<th> Address :';
echo '<td>'.$row["address"];

?>
<tr>
<td colspan="2">
<button class="btn btn-info"><a href="userupdate.php">Edit</a></button>
<button class="btn btn-danger"><a href="userlogin.php">Log out</a></button>
</table>
</div>
</form>
</body>
</html>
