<?php
class databaseclass{

private static $con=null;

private static function connect(){

self::$con=mysqli_connect('localhost','root','','test1');
return self::$con;

}
private static function disconnect(){

mysqli_close(self::$con);
self::$con=null;

}

public function getAllProducts(){

    $conn=databaseclass ::connect();
    $sql="select * from product_tbl";
    $res=$conn->query($sql);
    databaseclass ::disconnect();
    return $res;
}
public function deleteProduct($id){

    $conn=databaseclass ::connect();
    $sql="select * from product_tbl where pid='".$id."'";
    $res=$conn->query($sql);
    $row=$res->fetch_assoc();
    $img=$row["pimg"];
        if($img!=null)
        {
        unlink($img);

        $sql="delete from product_tbl where pid='".$id."'";
    }
    $res=$conn->query($sql);
    databaseclass ::disconnect();
    return $res;
}


public function addProducts($pname,$pcolor,$pprice,$pmanufacture,$pwarrenty,$psoh,$pimg,$fk_cat_id){

    $conn=databaseclass ::connect();
    $sql="insert into product_tbl (pname,pcolor,pprice,pmanufacture,pwarrenty,psoh,pimg,fk_cat_id) values('". $pname ."','". $pcolor ."','". $pprice ."','". $pmanufacture ."','". $pwarrenty ."','". $psoh ."','". $pimg ."','".$fk_cat_id."')";
    $res=$conn->query($sql);
    databaseclass ::disconnect();
    return $res;
}

public function updateProducts($pname,$pcolor,$pprice,$pmanufacture,$pwarrenty,$psoh,$pimg,$pid)
{
 $conn=databaseclass ::connect();
    $sql="update product_tbl set pname='". $pname ."',pcolor='". $pcolor ."',pprice='". $pprice ."',pmanufacture='". $pmanufacture ."',pwarrenty='". $pwarrenty ."',psoh='". $psoh ."',pimg='". $pimg ."'where pid='". $pid ."'";
    $res=$conn->query($sql);
    databaseclass ::disconnect();
    return $res;
   
}

}

?>