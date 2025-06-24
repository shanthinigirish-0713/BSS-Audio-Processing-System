<?php
require("connection.php");
$con->query("UPDATE downloads SET count = count + 1 WHERE audio_id = 1");

?>
