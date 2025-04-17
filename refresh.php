<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #F98B08;
        }
        .navbar .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .navbar .nav-link:hover {
            text-decoration: underline;
            background: none !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Me</a></li>
            </ul>
        </div>
    </div>
</nav>';
?>
</head>
<body>

    <header class="header">
        <marquee> <h1>Welcome to Lasya's Portfolio</h1></marquee>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
    </nav>

    <div class="container text-center my-5">
        <div class="profile-pic">
            <img src="ep pic l.jpeg" alt="Lasya's Pure">
        </div>
        <div class="story mt-4 mx-auto col-md-8 p-4">
            <p><b>My Passion</b></p>
            <p><i><h2>I am a student at SRM with a strong passion for horror stories and a love for exploring different foods. I enjoy the thrill of a good scare just as much as the excitement of tasting new flavors. Beyond my interests, my biggest goal is to make my parents happy, which drives me to work hard and stay motivated.</h2></i></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

