<html>
    <head>
   <script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" >


<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >


<script src="../js/bootstrap.min.js" ></script>

    </head>
<script src="../js/bootstrap.min.js" ></script>


    <body  >
    <?php
$id="";
      include 'menu.php';
?>



       <div class="col-md-3" >
<h2><b>Categories</b></h2><br>
        <div class="list-group">
 
  <a href="mobile.php" class="list-group-item">Mobiles</a>
  <a href="beg.php" class="list-group-item">Begs</a>
  <a href="watch.php" class="list-group-item">Watches</a>
  <a href="shoe.php" class="list-group-item">Shoes</a>
</div>
</div>

<?php
   require 'databaseclass.php';
   $obj=new databaseclass();
   $result=$obj->getAllProducts();


   echo' <div class="row col-md-9" >';

while($row=$result->fetch_assoc())
{   



  echo'<div class=" col-sm-6 col-md-4 container">';
    echo'<div class="thumbnail">';
      echo'<img src="'.$row["pimg"].'" >';
      echo'<div class="caption">';
        echo'<h3>'.$row["pname"].'</h3>';
        echo'<p>Price:-'.$row["pprice"].'</p>';
        echo'<p><a href="#" class="btn btn-primary" role="button">Buy</a> <a href="proread.php?id='.$row["pid"].'" class="btn btn-default" role="button">Read More</a></p>';
      echo'</div>';
    echo'</div>';
  echo'</div>';


    } 
    echo'</div>';  
     ?>
</table>
</form>
</body>
</html>
