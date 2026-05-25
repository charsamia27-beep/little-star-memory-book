<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM love_letters ORDER BY letter_id DESC");

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <title>Saved Love Letters</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #ffeaf2, #eaf6ff);
            color: #333;
        }

        .top-banner {
            text-align: center;
            padding: 50px 20px 35px;
            background: rgba(255,255,255,0.55);
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .top-banner h1 {
            font-size: 46px;
            margin: 0;
            color: #e75480;
            letter-spacing: 1px;
        }

        .top-banner p {
            font-size: 18px;
            color: #666;
            margin-top: 12px;
        }

        .nav {
            text-align: center;
            margin: 25px 0;
        }

        .nav a {
            text-decoration: none;
            background: #e75480;
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: bold;
            box-shadow: 0 6px 15px rgba(231,84,128,0.35);
        }

        .container {
            width: 85%;
            margin: auto;
            padding-bottom: 50px;
        }

        .letter-card {
            background: #ffffff;
            width: 75%;
            margin: 35px auto;
            padding: 45px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            position: relative;
            border-top: 8px solid #ff9bb8;
        }

        .letter-card::before {
            content: "💌";
            position: absolute;
            top: -28px;
            left: 35px;
            background: white;
            font-size: 34px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .letter-card h2 {
            font-size: 34px;
            color: #333;
            margin-top: 20px;
            margin-bottom: 25px;
        }

        .letter-card p {
            font-family: Georgia, serif;
            font-size: 22px;
            line-height: 1.9;
            color: #444;
            text-align: justify;
            white-space: pre-line;
        }

        .date-box {
            margin-top: 30px;
            background: #fff0f5;
            display: inline-block;
            padding: 10px 18px;
            border-radius: 20px;
            color: #d94f7c;
            font-weight: bold;
            font-size: 17px;
        }

        .empty {
            text-align: center;
            font-size: 22px;
            margin-top: 50px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="top-banner">
    <h1>Saved Love Letters</h1>
    <p>A collection of love, memories, and blessings for our Little Star ❤️</p>
</div>

<div class="nav">
    <a href="index.php">🏠 Back to Home</a>
</div>

<div class="container">

<?php if(mysqli_num_rows($result) > 0) { ?>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="letter-card">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['message']; ?></p>
            <div class="date-box">📅 Date: <?php echo $row['letter_date']; ?></div>
        </div>

    <?php } ?>

<?php } else { ?>

    <div class="empty">
        No letters saved yet.
    </div>

<?php } ?>

</div>

</body>
</html>