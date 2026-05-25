<?php
$conn = mysqli_connect(
    "sql105.infinityfree.com",
    "if0_41840911",
    "BIiXlzY942",
    "if0_41840911_little_star_db"
);
mysqli_set_charset($conn, "utf8mb4");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>