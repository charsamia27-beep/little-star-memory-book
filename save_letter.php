<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $message = $_POST['message'];
    $date = $_POST['letter_date'];

    $sql = "INSERT INTO love_letters (title, message, letter_date)
            VALUES ('$title', '$message', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo "Saved successfully ❤️<br>";
        echo "<a href='index.php'>Go Home</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    echo "Please submit the form first.";
}
?>