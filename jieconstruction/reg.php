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
    <title>Sign Up - Tank Wars</title>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/icons/gameicon.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo+Black&family=Inter:wght@400;700;800&family=Poppins:wght@300;400;500;600;700&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <!-- Logo -->
    <div class="logo">
        <a href="index.php">
            <img src="assets/images/tanklogo.png" alt="Tank Wars Logo">
        </a>
    </div>
    
    <!-- Signup Form -->
    <div class="torm">
        <form class="auth-form" method="POST" action="">
            <h2>Create Your Account</h2>
            
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            
            <div class="torm-group">
                <input type="text" name="username" id="username" placeholder="Username" required>
                <label for="username">Username</label>
            </div>
            
            <div class="torm-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email Address</label>
            </div>

            <div class="torm-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            
            <div class="torm-group">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                <label for="confirm_password">Confirm Password</label>
            </div>
            
            <button type="submit">Sign Up</button>
            
            <div class="divider">
                <span>OR SIGN UP WITH</span>
            </div>
            
            <div class="social-login">
                <a href="#" class="social-btn" title="Sign up with Google">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-btn" title="Sign up with Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-btn" title="Sign up with Discord">
                    <i class="fab fa-discord"></i>
                </a>
            </div>
            
            <div class="auth-links">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>
</body>
</html>