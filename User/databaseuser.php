<?php
class database{
private static $con=null;
private static function connect(){
    self::$con=mysqli_connect('localhost','root','','test1');
    return self::$con;
}

private static function disconnect(){
    mysqli_close(self::$con);
    self::$con=null;
}

public function getUser(){
    $conn=database::connect();
    $sql="select * from user_tbl";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}

public function getProfileUser($email){
    $conn=database::connect();
    $sql="select * from user_tbl where email='". $email ."'";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}


public function getLoginUser($email,$password){
    $conn=database::connect();
$sql="select * from user_tbl where email='". $email ."' and password='". $password ."' ";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}

public function getSignup($email,$name,$password,$mobile,$address,$img){
    $conn=database::connect();
    $sql="insert into user_tbl values('". $email ."','". $name ."','". $password ."','". $mobile ."','". $address ."','". $img ."')";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}


public function deleteUser($id){
    $conn=database::connect();
    $sql="delete from user_tbl where email='".$id."'";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}

public function updateProducts($pname,$pcolor,$pprice,$pmanufacture,$pwarrenty,$psoh,$pimg,$pid)
{
 $conn=database ::connect();
    $sql="update product_tbl set pname='". $pname ."',pcolor='". $pcolor ."',pprice='". $pprice ."',pmanufacture='". $pmanufacture ."',pwarrenty='". $pwarrenty ."',psoh='". $psoh ."',pimg='". $pimg ."'where pid='". $pid ."'";
    $res=$conn->query($sql);
    database ::disconnect();
    return $res;
   
}

    public function getCp($email,$password,$newpassword){
    $conn=database::connect();
    $sql="select * from user_tbl where email='". $email ."' and password='". $password ."' ";
    $res=$conn->query($sql);
    if($res->num_rows==1)
    {
        $sql="update user_tbl set password='". $newpassword ."' where email='".$email."'";
         $res=$conn->query($sql);
         return $res;
    }
    else
    {
        echo "failed";
    }
    database::disconnect();

    return $res;

    }

    public function forgotUser($email){
    $conn=database::connect();
    $sql="select password from user_tbl where email='". $email ."'";
    $res=$conn->query($sql);    
   
    database::disconnect();
    return $res;

}

}

?>