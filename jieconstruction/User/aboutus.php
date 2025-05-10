<!-- filepath: c:\xampp\htdocs\jieconstruction\User\homepage.php -->
<?php
// Start the session
session_start();

// Example: Set a default username if not already set
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'Guest'; // Default username
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="UserCss/JIEconstruct.css">
    <link rel="icon" href="img/LOGO.webp" border-radius="50%" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet">
    <title>JIE About us</title>
</head>
<body>
    
    <header>
        <a href="homepage.html" class="logo">
            <img class="logo" src="webimage/Company-icon2.webp" alt="logo">
        </a>
    
        <ul class="navlist">
            <li><a href="homepage.php"><i class="fas fa-home"></i> HOME</a></li>
            <li><a href="services.php"><i class="fas fa-tools"></i> SERVICES</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i> CONTACT</a></li>
            <li><a class="active" href="aboutus.php"><i class="fas fa-user"></i> ABOUT US </a></li>
        </ul>
        
    <div class="right-content">
        <div class="nav-btn" onclick="toggleMenu()"><i class="fa-solid fa-bars" width="20"></i><i class="fa-solid fa-user cute"></i></div>
         <div class="profile" id="profileMenu">
          <div class="subprofile">
            <div class="userinfo">
              <img src="webimage/LOGO.webp" alt="">
              <h2><?php echo $_SESSION['username']; ?></h2>

            </div>
            <hr>
            <a href="" class="subprofile-link">
              <i class="fa-solid fa-user"></i>
              <p>Edit Profile</p>
              <span>></span>
            </a>
            <a href="" class="subprofile-link">
              <i class="fa-solid fa-gear"></i>
              <p>Settings & Privacy</p>
              <span>></span>
            </a>
            <a href="" class="subprofile-link">
              <i class="fa-solid fa-circle-info"></i> 
              <p>Help & Support</p>
              <span>></span>
            </a>
            <a href="logout.php" class="subprofile-link">
              <i class="fa-solid fa-right-from-bracket"></i>
              <p>Logout</p>
              <span>></span>
            </a>
          </div>
         </div>
         <div class="bx bx-menu" id="menu-icon"></div>
         </div>
    </header>

   


    <img src="webimage/aboutbg.png" alt="" class="faded">

    <div class="this">
    <div class="aboutus-container">
        <img class="img3" src="webimage/about us pic1.jpg" alt="">
        <img class="img2" src="webimage/about us pic2.jpg" alt="">
    <div class="aboutus">
      <h1>About Us</h1>
    <div class="about-box">
      <p>We are a dynamic company with wide</p>
      <p>ranging service offerings guided by</p>
      <p>principle of doing it right the first time</p>
      <p>and avoiding rework</p>
      </div>
      </div>
    </div>
    </div>
</div>


<img class="mv" src="webimage/image2.png" alt="">


    <div class="ourmv">
        <div class="Mission-vission">
            <h1>Our Mission</h1>
            <p>To provide a comprehensive range of constructing to specialized projects, with an unwavering commitment to excellence, cost effectiveness, and timely delivery. We aim
                to exceed clients expectations by leveraging skilled professionals, adhering
                to the highest industry standards, and upholding our principle of doing it right the first time 
            </p>
        </div>
        <div class="Mission-vission">
            <h1>Our Vision</h1>
            <p>To be one of the leading corporate constructors in the industry, recognized for reliability
                , creativity, and excellence. We strive to enhance spaces through innovated, sustainable practices and high-quality techniques, leaving a lasting legacy
                in every project we undertake.
            </p>
        </div>
    </div>

    <footer class="footer3">
        <div class="footer-container3">
          <div class="footer-links3">
            <h4>Quick Links</h4>
            <ul>
              <a href="homepage.php"><i class="fas fa-home"></i> Homepage</a>
              <a href="services.php"><i class="fas fa-tools"></i> Our Services</a>
              
            </ul>
          </div>
          <div class="footer-company3">
            <h4>COMPANY</h4>
            <a href="aboutus.php"><i class="fas fa-user"></i> About us</a>
            <a href="contact.php"><i class="fas fa-envelope"></i> Contact us</a>
            
          </div>
          <div class="footer-terms3">
            <h4>LEGAL</h4>
            <a href="#"><i class="fas fa-file-contract"></i> Terms and Condition</a>
            <a href="termscondition.php"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
            
          </div>
        </div>
      </footer>
</body>
<script src="Jie1.js"></script>
<script>
  let profileMenu = document.getElementById("profileMenu");

function toggleMenu() {
    profileMenu.classList.toggle("open-menu")
}
</script>
</html>