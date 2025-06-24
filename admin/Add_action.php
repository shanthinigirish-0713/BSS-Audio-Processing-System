<?php
require("connection.php");
$cat=$_REQUEST["category"];
$Audio=$_FILES["audio"]["name"];
$res=$con->query("insert into `tb_audio`(`Audios`,`category`)values('$Audio','$cat')");
$count=mysqli_affected_rows($con);   
if($count>0)
    {
			move_uploaded_file($_FILES["audio"]["tmp_name"],"Audios/".$Audio);
    header("location:Addaudios.php");
	}
?>