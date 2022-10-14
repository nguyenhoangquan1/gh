<?php
require 'ketnoi_database.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO `xuly`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
if($conn->query($sql)==true)
{
   
    header("location: tai khoandang nhap.php");
   

}
else{
    echo "tài khoản bị trùng [thất bại]";
}



/*
require "ketnoi_database.php";
//lay du lieu
if(isset($_POST['dangky'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
 $sql="INSERT INTO `xuly`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
}
*/
?>