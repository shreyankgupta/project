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

    $conn=new mysqli("localhost","root","","test1");
    if($conn->connect_error)
    {
        echo "connection error";
    }
$id=$_GET["id"];
echo $id;
    $sql="select * from product_tbl where pid=".$id;

    $result=$conn->query($sql);

?>

<form action="proread.php" method="post">
<div class="container">
<table class="table" align="center">
<thead>
<tr>
<td> <h1>Details</h1>
</thead>
<?php
$row=$result->fetch_assoc();
echo '<tr>';
echo '<th>Product Image :';
echo '<td><div class="row">';
  echo'<div class="col-sm-6 col-md-4">';
    echo'<div class="thumbnail">';
      echo'<img src="'.$row["pimg"].'">';
   

   echo '</div>';
  echo '</div>';
echo '</div>';

echo '<tr>';
echo '<th> Product Name :';
echo '<td> <h2>'.$row["pname"].'</h2>';

echo '<tr>';
echo '<th> Color :';
echo '<td>'.$row["pcolor"];

echo '<tr>';
echo '<th> Price :';
echo '<td>'.$row["pprice"];

echo '<tr>';
echo '<th> Manufacture :';
echo '<td>'.$row["pmanufacture"];

echo '<tr>';
echo '<th> Warrenty :';
echo '<td>'.$row["pwarrenty"];

echo '<tr>';
echo '<th> Stock on Hand :';
echo '<td>'.$row["psoh"];


?>
</table>
</div>
</form>

</body>
</html>