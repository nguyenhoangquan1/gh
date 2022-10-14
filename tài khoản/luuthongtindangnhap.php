<?php
require 'ketnoi_database.php';
if(isset($_POST['sing']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="select * from `xuly` where name='$name'";
    $query=mysqli_query($conn,$sql);
    var_dump($query);

}

    header("location:../index.html")









?>