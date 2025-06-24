


<?php
require("connection.php");

$category = isset($_POST['category']) ? mysqli_real_escape_string($con, $_POST['category']) : 'all';

$query = ($category == "all") ? "SELECT * FROM tb_audio" : "SELECT * FROM tb_audio WHERE category = '$category'";

$res = $con->query($query);
?>

<div class="container">
    <div class="row">
        <?php
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $audioPath = 'admin/Audios/' . htmlspecialchars($row['Audios']);
                $fileName = basename($audioPath);
                $audioId = $row['Id']; // Ensure 'id' column exists in 'tb_audio' table
                ?>
                <div class="col-md-3">
                    <div class="card shadow-sm p-3 text-center">
                        <a href="<?= $audioPath ?>" target="_blank" class="audio-link btn btn-primary">Click here to hear audio</a>
                    </div>
                    <a href="<?= $audioPath ?>" download="<?= $fileName ?>" class="btn btn-success download-audio"
   onclick="updateDownloadCount(<?= $audioId ?>)">
   Download Audio
</a>

                </div>
                <?php
            }
        } else {
            echo "<p class='text-center'>No audios found for this category.</p>";
        }
        ?>
    </div>
</div>
