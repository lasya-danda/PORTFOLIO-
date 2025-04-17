<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('All fields are required!');</script>";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "<script>alert('Invalid name format! Only letters and spaces allowed.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format!');</script>";
    } else {
        echo "<script>alert('Form submitted successfully!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .navbar { background-color: #F98B08; }
        .navbar a { color: white !important; font-weight: bold; }
        .navbar a:hover { background-color: #e07800; border-radius: 5px; }
        footer { text-align: center; padding: 10px; background: #F98B08; color: white; font-size: 14px; margin-top: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">My Portfolio</a>
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

    <div class="container-fluid mt-4">
        <h2 class="text-center">About Me</h2>
        <p class="text-center">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#aboutContent">Show Details</button>
        </p>
        <div class="collapse" id="aboutContent">
            <div class="card card-body">
                <p><strong>Name:</strong> Danda Lasya</p>
                <p><strong>Profession:</strong> Student</p>
                <p><strong>Skills:</strong> 2nd Year CSE, AIML Specialization</p>
                <p><strong>Contact:</strong> 9898987776</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <h2 class="text-center">Contact Me</h2>
        <div class="modal-body">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
