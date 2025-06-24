<?php
require("connection.php");
$userid=$_REQUEST["UserId"];
$res=$con->query("select * from `tb_audio` where `Id`='$userid'");
$count=$res->num_rows;
if($count>0)
$row=$res->fetch_assoc();
$Audio=$row["Audios"];
unlink("Audios/$Audio");
$res=$con->query("delete from `tb_audio` where`Id`='$userid'");
$count=mysqli_affected_rows($con);
if($count=0)
{
	header("location:Viewaudios.php");
}
else
{
	header("location:Viewaudios.php");
}
?>