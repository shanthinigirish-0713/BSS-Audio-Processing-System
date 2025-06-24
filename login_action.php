<?php
require("connection.php");
$Ma=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$res=$con->query("select * from `tb_users` where `Email`='$Ma' AND `Password`='$pass'");
$count=$res->num_rows;
if($count>0)
{
	header("location:login_page.php");
}
else
{ 
    header("location:index.php");
}

?>