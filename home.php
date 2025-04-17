<?php
// You can change the current page dynamically
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #F98B08;
            padding: 15px;
            text-align: right;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            line-height: 1.6;
            color: #555;
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

        .navbar .nav-link.active {
            color: white !important; 
            background: none !important; 
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #F98B08;
            color: white;
            font-size: 14px;
        }
        .dark-mode {
            background-color: #222 !important;
            color: #f8f9fa !important;
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
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'home.php' ? 'active' : ''); ?>" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'aboutus.php' ? 'active' : ''); ?>" href="aboutus.php">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'gallery.php' ? 'active' : ''); ?>" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'contact.php' ? 'active' : ''); ?>" href="contact.php">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>ABOUT ME</h1>
        <hr>
        <p>Hello! My name is Adhira, and I am currently a second-year B.Tech student at SRM University, AP. I am deeply interested in specializing in Artificial Intelligence and Machine Learning (AIML), as I find immense joy in bringing creative designs to life with clean and efficient code.</p>
        
        <p>In my free time, I love playing games, watching cartoons, and indulging in horror movies, mainly eating different types of new food, especially sweets. My ultimate goal is to create impactful and innovative applications that address real-world challenges and contribute to making a positive difference.</p>
        
        <p>I am also passionate about improving my technical expertise and actively working on honing my skills in programming languages like HTML, Java, Python, and C++, among others. My aim is to continuously grow as a developer and build applications that inspire and transform ideas into reality.</p>
        
        <p>Feel free to explore my portfolio to learn more about me and my work!</p>
    </div>

    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll(".nav-link").forEach(link => {
            link.addEventListener("click", function() {
                document.querySelectorAll(".nav-link").forEach(nav => nav.classList.remove("active"));
                this.classList.add("active");
            });
        });
    </script>
</body>
</html>
