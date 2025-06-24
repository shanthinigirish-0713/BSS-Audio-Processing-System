<?php
require("connection.php");

// Fetch audio_id and count from downloads table
$query = "SELECT audio_id, count FROM downloads";
$res = $con->query($query);

$data = [];
while ($row = $res->fetch_assoc()) {
    $data["labels"][] = "Audio " . $row["audio_id"]; // Label as "Audio X"
    $data["counts"][] = (int) $row["count"]; // Convert count to integer
}

// Return JSON response
echo json_encode($data);
?>
