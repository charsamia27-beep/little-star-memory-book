<?php
include "db.php";

$success = "";
$error = "";

if (isset($_POST['upload'])) {
    $filename = basename($_FILES['image']['name']);
    $tmp_name = $_FILES['image']['tmp_name'];

    $newname = time() . "_" . $filename;
    $path = "uploads/" . $newname;

    if (move_uploaded_file($tmp_name, $path)) {
        $sql = "INSERT INTO photos (image) VALUES ('$newname')";

        if (mysqli_query($conn, $sql)) {
            $success = "Photo uploaded successfully ❤️";
        } else {
            $error = "Database error: " . mysqli_error($conn);
        }
    } else {
        $error = "Upload failed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Upload Memory</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(135deg, #fff1f6, #eef7ff);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    background: white;
    width: 430px;
    padding: 45px;
    border-radius: 28px;
    text-align: center;
    box-shadow: 0 20px 45px rgba(0,0,0,0.14);
}

h1 {
    color: #d9829b;
    font-family: Georgia, serif;
}

input[type="file"] {
    padding: 15px;
    border: 2px dashed #f0bfd0;
    border-radius: 16px;
    width: 90%;
    margin: 20px 0;
}

button {
    background: #c87962;
    color: white;
    border: none;
    padding: 13px 30px;
    border-radius: 30px;
    font-weight: bold;
    cursor: pointer;
}

.msg {
    background: #fff0f5;
    color: #d9829b;
    padding: 12px;
    border-radius: 15px;
    margin-bottom: 15px;
    font-weight: bold;
}

a {
    display: inline-block;
    margin-top: 20px;
    color: #c87962;
    font-weight: bold;
    text-decoration: none;
}
</style>
</head>

<body>

<audio id="bgMusic" loop>
    <source src="music/lullaby.mp3" type="audio/mpeg">
</audio>

<div class="card">
    <?php if($success != "") echo "<div class='msg'>$success</div>"; ?>
    <?php if($error != "") echo "<div class='msg'>$error</div>"; ?>

    <h1>📸 Upload Memory</h1>
    <p>Add a family photo to the Little Star memory gallery.</p>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <br>
        <button type="submit" name="upload">Upload Photo</button>
    </form>

    <br><br>
    <button onclick="toggleMusic()">🎵 Play / Pause Music</button>

    <br>
    <a href="index.php">🏠 Back to Home</a>
</div>

<script>
function toggleMusic() {
    const music = document.getElementById("bgMusic");
    if (music.paused) {
        music.play();
    } else {
        music.pause();
    }
}
</script>

</body>
</html>