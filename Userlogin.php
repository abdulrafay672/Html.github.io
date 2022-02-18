<?php
// die("assd");
include('database.php');

$radio=$_POST['room_type'];
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="SELECT *FROM teacher where t_email='$email' && t_pass='$pass'";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);


if ($email== 1 and $pass==1) {
    // echo "You are right";
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;
    echo "You are right";


}else{
    echo "You are Rong...!";
}

?>