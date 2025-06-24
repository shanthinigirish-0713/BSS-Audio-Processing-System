<?php
require("connection.php");

$userid = (int)$_REQUEST["UserId"];
$category = $_REQUEST["category"];

// Check if a new audio file is uploaded
if (!empty($_FILES["audio"]["name"])) {
    $audioName = $_FILES["audio"]["name"];
    $audioTmpName = $_FILES["audio"]["tmp_name"];

    // Move uploaded file to Audios/ folder
    if (move_uploaded_file($audioTmpName, "Audios/" . $audioName)) {
        // Update both audio and category
        $query = "UPDATE `tb_audio` SET `Audios`='$audioName', `category`='$category' WHERE `Id`='$userid'";
    } else {
        echo "Failed to upload audio file.";
        exit;
    }
} else {
    // Only update the category if no new audio is uploaded
    $query = "UPDATE `tb_audio` SET `category`='$category' WHERE `Id`='$userid'";
}

$res = $con->query($query);
if ($res) {
    header("location: Viewaudios.php");
} else {
    echo "Update failed.";
}
?>
