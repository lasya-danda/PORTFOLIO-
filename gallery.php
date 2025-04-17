<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .navbar a {
            color: white !important;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #e07800;
            border-radius: 5px;
        }

        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .gallery img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #F98B08;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">My Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav d-flex flex-row gap-3">
                    <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="aboutus.php">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Gallery</h2>
        <p>Check out some of my work below:</p>
        <div class="gallery">
        <img src="image 1.jpg">
            
<img src="image 2.jpg">
<img src="image 3.jpg">
<img src="image 4.jpg">
<img src="image 5.jpg">
<img src="image 6.jpg">
<img src="image 7.jpg">
<img src="image 8.jpg">
        </div>
    </div>

    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>