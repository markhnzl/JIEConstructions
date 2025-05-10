
<?php
session_start();
require 'conn.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   
    if ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            $error = "Email is already registered.";
        } else {
            
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES ( ?, ?, ?)");
            if ($stmt->execute([$username, $email, $hashed_password])) {
                
                $_SESSION['success'] = "Account created successfully. Please log in.";
                header('Location: login.php');
                exit();
            } else {
                $error = "An error occurred. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="User/LOGO.webp" border-radius="50%" type="image/svg+xml">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>

<style>
    
</style>

<body>

<header>
      <a href="#home" class="logo">
        <img class="logo" src="User/webimage/Company-icon2.webp" alt="logo">
    </a>

    <ul class="navlist">
        <li><a href="homepage.php"><i class="fas fa-home"></i> HOME</a></li>
        <li><a href="services.php"><i class="fas fa-tools"></i> SERVICES</a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i> CONTACT</a></li>
        <li><a href="aboutus.php"><i class="fas fa-user"></i> ABOUT US </a></li>
    </ul>
    <div class="right-content">
        <a href="login.php" class="nav-btn"><i class="fas fa-sign-in-alt"></i> Sign in</a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>
    
<img class="hb" src="User/webimage/homebgg.png" alt="">
    <div class="torm">
        
    <form action="register.php" method="post">
        <h2>Registration</h2>
        <p class="msg"></p>
            <div class="torm-group">
                <input type="text" name="username" placeholder="Enter Your Full Name" class="form-control"  required>
                <span class="warning"></span>
            </div>
            <div class="torm-group">
                <input type="email" name="email" placeholder="Enter Your Email" class="form-control"  required>
                <span class="warning"></span>
            </div>
            
            <div class="torm-group">
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
                <span class="warning"></span>
            </div>
            <div class="torm-group">
                <input type="password" name="confirm_password" placeholder="Confirm Your Password" class="form-control" required>
                <span class="warning"></span>
            </div>
            <button class="btn font-weight-bold" name="submit">Register</button>
            <p>Already have an account? <a href="login.php">Login now!</a></p>
</form>
    </div>

    <footer class="footer">
    <div class="footer-container">
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <a href="#home"><i class="fas fa-home"></i> Homepage</a>
          <a href="#service"><i class="fas fa-tools"></i> Our Services</a>
          
        </ul>
      </div>
      <div class="footer-company">
        <h4>COMPANY</h4>
        <a href="aboutus.html"><i class="fas fa-user"></i> About us</a>
        <a href="contact.html"><i class="fas fa-envelope"></i> Contact us</a>
        
      </div>
      <div class="footer-terms">
        <h4>LEGAL</h4>
        <a href="#"><i class="fas fa-file-contract"></i> Terms and Condition</a>
        <a href="#"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
        
      </div>
    </div>
  </footer>

    
</body>
</html>