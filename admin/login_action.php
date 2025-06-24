<?php
session_start();
require("connection.php");
$u=$_REQUEST["un"];
$pass=$_REQUEST["psw"];
$res=$con->query("select * from `tb_admin` where `UserName`='$u' AND `Password`='$pass'");
$count=$res->num_rows;

if($count>0)
{
	$_SESSION["user"]=$u;
	
	header("location:dashboard.php");
}
else
{ 
  $message="Invalid username or password";
   echo "<script> alert('$message'); window.location='index.php'; </script>";
}
?>