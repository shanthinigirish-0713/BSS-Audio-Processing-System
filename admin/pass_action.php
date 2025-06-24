<?php
session_start();
require("connection.php");
$uid=$_SESSION["Id"];
$psw=$_REQUEST["psw"];
$newpsw=$_REQUEST["newpsw"];
$confirmpsw=$_REQUEST["confirmpsw"];
$res=$con->query("select * from  `tb_admin` where `Id`='$uid'");
$count=$res->num_rows;
if($count=0)
{
	$message="Password doesn't match";
   echo "<script> alert('$message'); window.location='change_password.php'; </script>";
}
else
{
	$res=$con->query("update `tb_admin` set `Password`='$newpsw' where `Id`='$uid'");
$count=mysqli_affected_rows($con);

	if($newpsw=$confirmpsw)
	{
	$message="Your Password is successfully changed";
   echo "<script> alert('$message'); window.location='index.php'; </script>";
    }
else
{
	$message="Password is wrong";
   echo "<script> alert('$message'); window.location='change_password.php'; </script>";
}
}
?>