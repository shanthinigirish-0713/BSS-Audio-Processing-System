<?php
require("connection.php");
$Na=$_REQUEST["name"];
$Ma=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$cpass=$_REQUEST["confirmpass"];
$ph=$_REQUEST["phone"];
$res=$con->query("select * from `tb_users` where `Email`='$Ma'");
$count=$res->num_rows;
if($count>0)
{	
$message="Email already Exsist!";
echo "<script> alert('$message'); window.location='index.php'; </script>";
}
else
{
$res=$con->query("insert into `tb_users`(`Name`,`Email`,`Password`,`ConfirmPassword`,`PhoneNumber`)values('$Na','$Ma','$pass','$cpass','$ph')");
$count=mysqli_affected_rows($con);   
if($count>0)
    {
    header("location:index.php");
    }

}
?>
