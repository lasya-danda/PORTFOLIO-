<?php
// Initialize variables
$name = $email = $message = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $message = trim($_POST["message"] ?? '');
    
    if (!preg_match("/^[a-zA-Z ]{3,}$/", $name)) {
        $errors['name'] = "Enter a valid full name (min 3 letters, no numbers).";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Enter a valid email address.";
    }
    
    if (strlen($message) < 10) {
        $errors['message'] = "Message must be at least 10 characters long.";
    }
    
    if (empty($errors)) {
        echo "<script>alert('Thank you! Your message has been sent.');</script>";
        // Clear form after successful submission
        $name = $email = $message = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #F98B08;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: #F98B08 !important;
        }
        .container {
            margin-top: 30px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .error {
            color: #dc3545;
            font-size: 0.875em;
        }
        footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #F98B08;
            color: white;
            text-align: center;
        }
        .btn-primary {
            background-color: #F98B08;
            border-color: #F98B08;
        }
        .btn-primary:hover {
            background-color: #e07d07;
            border-color: #e07d07;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'home.php' ? 'active' : ''); ?>" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'aboutus.php' ? 'active' : ''); ?>" href="aboutus
                    .php">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'gallery.php' ? 'active' : ''); ?>" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'contact.php' ? 'active' : ''); ?>" href="contact.php">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Form -->
    <div class="container">
        <h2 class="text-center mb-4">Contact Me</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" 
                       value="<?php echo htmlspecialchars($name); ?>" required>
                <div class="error"><?php echo $errors['name'] ?? ''; ?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" 
                       value="<?php echo htmlspecialchars($email); ?>" required>
                <div class="error"><?php echo $errors['email'] ?? ''; ?></div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required><?php echo htmlspecialchars($message); ?></textarea>
                <div class="error"><?php echo $errors['message'] ?? ''; ?></div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <footer class="mt-5">
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>