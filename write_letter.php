<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Write Letter</title>

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

        .letter-box {
            width: 520px;
            background: white;
            padding: 45px;
            border-radius: 28px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.12);
            text-align: center;
        }

        h1 {
            color: #d9829b;
            font-size: 36px;
            margin-bottom: 10px;
        }

        p {
            color: #777;
            margin-bottom: 28px;
        }

        label {
            display: block;
            text-align: left;
            font-weight: 600;
            color: #555;
            margin: 15px 0 7px;
        }

        input, textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #f1c7d0;
            border-radius: 14px;
            font-size: 15px;
            outline: none;
            box-sizing: border-box;
        }

        textarea {
            height: 160px;
            resize: vertical;
        }

        button {
            margin-top: 24px;
            background: #c87962;
            color: white;
            border: none;
            padding: 14px 35px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            font-size: 15px;
            box-shadow: 0 8px 20px rgba(200,121,98,0.25);
        }

        button:hover {
            background: #b86752;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #c87962;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="letter-box">
    <h1>💌 Write a Love Letter</h1>
    <p>Save a sweet memory, blessing, or message for your Little Star.</p>

    <form action="save_letter.php" method="POST">
        <label>Title</label>
        <input type="text" name="title" placeholder="Example: First Letter" required>

        <label>Message</label>
        <textarea name="message" placeholder="Write your beautiful letter here..." required></textarea>

        <label>Date</label>
        <input type="date" name="letter_date" required>

        <button type="submit">Save Letter ❤️</button>
    </form>

    <a href="index.php">🏠 Back to Home</a>
</div>

</body>
</html>