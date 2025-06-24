<?php
require("connection.php");

// Fetch data from downloads table
$sql = "SELECT audio_id, count FROM downloads";
$result = $conn->query($sql);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = [
        "audio_id" => "Audio " . $row['audio_id'], // Label for X-axis
        "count" => (int) $row['count'] // Convert count to integer
    ];
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
