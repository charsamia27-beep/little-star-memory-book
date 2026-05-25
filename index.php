<!DOCTYPE html>
<html>
<head>
    <title>Little Star Memory Book</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fffaf7;
            color: #4a4a4a;
            overflow-x: hidden;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 70px;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #c87962;
        }

        .nav-links a {
            text-decoration: none;
            color: #555;
            margin-left: 25px;
            font-weight: 500;
        }

        .nav-btn {
            background: #c87962;
            color: white !important;
            padding: 10px 22px;
            border-radius: 30px;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 90px 90px 60px;
        }

        .hero-text {
            width: 48%;
        }

        .hero-title {
            font-size: 60px;
            font-weight: 700;
            background: linear-gradient(45deg, #ff758c, #ffb6c1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: Georgia, serif;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 20px;
            color: #777;
            line-height: 1.7;
            margin-bottom: 35px;
        }

        .buttons a {
            text-decoration: none;
            padding: 14px 28px;
            margin-right: 15px;
            border-radius: 30px;
            font-weight: bold;
        }

        .primary {
            background: #c87962;
            color: white;
            box-shadow: 0 8px 20px rgba(200,121,98,0.35);
        }

        .secondary {
            background: #fff;
            color: #c87962;
            border: 2px solid #c87962;
        }

        .hero-visual {
            width: 45%;
            position: relative;
            height: 430px;
        }

        .book {
            width: 330px;
            height: 240px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            position: absolute;
            top: 70px;
            right: 20px;
            transform: rotate(-7deg);
            padding: 20px;
        }

        .book img {
            width: 100%;
            height: 165px;
            object-fit: cover;
            border-radius: 12px;
        }

        .phone {
            width: 210px;
            height: 360px;
            background: #222;
            border-radius: 35px;
            position: absolute;
            left: 20px;
            top: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
            padding: 16px;
        }

        .phone-screen {
            background: #eaf6ff;
            height: 100%;
            border-radius: 25px;
            padding: 18px;
            text-align: center;
        }

        .phone-screen img {
            width: 100%;
            border-radius: 15px;
            margin-top: 20px;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 35px;
            padding: 40px 80px 80px;
        }

        .feature-card {
            background: white;
            width: 230px;
            text-align: center;
            padding: 30px 20px;
            border-radius: 22px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.10);
        }

        .feature-card h3 {
            color: #4b4b5c;
        }

        .feature-card p {
            color: #777;
            font-size: 15px;
        }

        .hearts {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .heart {
            position: absolute;
            bottom: -50px;
            width: 20px;
            height: 20px;
            background: #ffb6c1;
            transform: rotate(45deg);
            animation: floatHeart 8s linear infinite;
            opacity: 0.75;
        }

        .heart::before,
        .heart::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            background: #ffb6c1;
            border-radius: 50%;
        }

        .heart::before {
            top: -10px;
            left: 0;
        }

        .heart::after {
            left: -10px;
            top: 0;
        }

        @keyframes floatHeart {
            0% {
                transform: translateY(0) rotate(45deg);
                opacity: 0;
            }

            20% {
                opacity: 0.8;
            }

            100% {
                transform: translateY(-110vh) rotate(45deg);
                opacity: 0;
            }
        }

        .gallery {
            text-align: center;
            padding: 70px 20px;
        }

        .gallery h2 {
            font-size: 36px;
            color: #ff8fa3;
            margin-bottom: 25px;
            font-family: Georgia, serif;
        }

        .gallery-box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 22px;
        }

        .photo-card {
            background: white;
            padding: 14px;
            border-radius: 20px;
            width: 230px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            transition: 0.3s;
        }

        .photo-card:hover {
            transform: translateY(-8px);
        }

        .photo-card img {
            width: 210px;
            height: 210px;
            object-fit: cover;
            border-radius: 16px;
            cursor: pointer;
        }

        .photo-card p {
            color: #666;
            font-size: 15px;
            margin: 10px 0;
        }

        #imageModal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.85);
            justify-content: center;
            align-items: center;
        }

        #modalImg {
            max-width: 90%;
            max-height: 90%;
            border-radius: 18px;
        }

        .music-btn {
            position: fixed;
            right: 25px;
            bottom: 25px;
            background: #c87962;
            color: white;
            border: none;
            padding: 14px 22px;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            z-index: 999;
            font-weight: bold;
        }

        .music-btn:hover {
            background: #ff8fa3;
        }

    </style>
</head>

<body>

<div class="hearts" id="hearts"></div>

<div class="navbar">
    <div class="logo">🌟 Little Star</div>

    <div class="nav-links">
        <a href="write_letter.php">Write Letter</a>
        <a href="view_letters.php">Letters</a>
        <a href="upload.php">Upload Photo</a>
        <a class="nav-btn" href="write_letter.php">Get Started</a>
    </div>
</div>

<section class="hero">
    <div class="hero-text">

        <h1 class="hero-title">
            A Little Gift from Mum Mum 💖
        </h1>

        <p>
            Create a digital memory book for our little star.
            Save love letters, family memories, birthday moments
            and blessings from the very beginning.
        </p>

        <div class="buttons">
            <a class="primary" href="write_letter.php">
                💌 Write a Letter
            </a>

            <a class="secondary" href="view_letters.php">
                📖 Read Letters
            </a>

            <a class="secondary" href="upload.php">
                📸 Upload Photo
            </a>
        </div>
    </div>

    <div class="hero-visual">

        <div class="phone">
            <div class="phone-screen">

                <b>Dear Little Star ❤️</b>

                <p>
                    Your family loved you before you arrived.
                </p>

                <img src="https://images.unsplash.com/photo-1546015720-b8b30df5aa27?w=400">

            </div>
        </div>

        <div class="book">

            <img src="https://images.unsplash.com/photo-1519689680058-324335c77eba?w=500">

            <h3>Memory Book</h3>

            <p>Letters, photos & milestones</p>

        </div>

    </div>
</section>

<section class="features">

    <div class="feature-card">
        <h3>💌 Love Letters</h3>
        <p>Write daily letters and preserve emotions forever.</p>
    </div>

    <div class="feature-card">
        <h3>📸 Photos</h3>
        <p>Add family photos and sweet messages.</p>
    </div>

    <div class="feature-card">
        <h3>🎂 Birthday</h3>
        <p>Save birthday memories year by year.</p>
    </div>

</section>

<section class="gallery">

    <h2>💖 Our Memories</h2>

    <div class="gallery-box">

        <?php

        include "db.php";

        $result = mysqli_query($conn, "SELECT * FROM photos ORDER BY id DESC");

        while($row = mysqli_fetch_assoc($result)) {

            $caption = isset($row['caption']) ? $row['caption'] : '';

            echo "
            <div class='photo-card'>

                <img src='uploads/".$row['image']."' 
                     onclick='openImage(this.src)'>

                <p>".$caption."</p>

            </div>
            ";
        }

        ?>

    </div>
<div id="imageModal" onclick="closeImage()">
    <img id="modalImg">
</div>

<audio id="bgMusic" loop>
    <source src="music/lullaby.mp3" type="audio/mpeg">
</audio>

<button class="music-btn" onclick="toggleMusic()">🎵 Play Music</button>

<script>
function createHeart() {
    const heart = document.createElement("div");
    heart.classList.add("heart");

    heart.style.left = Math.random() * 100 + "vw";
    heart.style.width = (14 + Math.random() * 16) + "px";
    heart.style.height = heart.style.width;

    document.getElementById("hearts").appendChild(heart);

    setTimeout(() => {
        heart.remove();
    }, 8000);
}

setInterval(createHeart, 700);

function openImage(src) {
    document.getElementById("imageModal").style.display = "flex";
    document.getElementById("modalImg").src = src;
}

function closeImage() {
    document.getElementById("imageModal").style.display = "none";
}

let playing = false;

function toggleMusic() {
    let music = document.getElementById("bgMusic");
    let btn = document.querySelector(".music-btn");

    if (!playing) {
        music.play();
        btn.innerHTML = "⏸ Pause Music";
        playing = true;
    } else {
        music.pause();
        btn.innerHTML = "🎵 Play Music";
        playing = false;
    }
}
</script>

</body>
</html>
</section>

<div id="imageModal" onclick="closeImage()">
    <img id="modalImg">
</div>

<audio id="bgMusic" loop>
    <source src="music/lullaby.mp3" type="audio/mpeg">
</audio>

<button class="music-btn" onclick="toggleMusic()">
    🎵 Play Music
</button>

<script>

function createHeart() {

    const heart = document.createElement("div");

    heart.classList.add("heart");

    heart.style.left = Math.random() * 100 + "vw";

    heart.style.width = (14 + Math.random() * 16) + "px";

    heart.style.height = heart.style.width;

    document.getElementById("hearts").appendChild(heart);

    setTimeout(() => {
        heart.remove();
    }, 8000);
}

setInterval(createHeart, 700);

function openImage(src) {

    document.getElementById("imageModal").style.display = "flex";

    document.getElementById("modalImg").src = src;
}

function closeImage() {

    document.getElementById("imageModal").style.display = "none";
}

let playing = false;

function toggleMusic() {

    let music = document.getElementById("bgMusic");

    let btn = document.querySelector(".music-btn");

    if (!playing) {

        music.play();

        btn.innerHTML = "⏸ Pause Music";

        playing = true;

    } else {

        music.pause();

        btn.innerHTML = "🎵 Play Music";

        playing = false;
    }
}

</script>

</body>
</html>