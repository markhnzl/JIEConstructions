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
    <link rel="icon" href="webimage/LOGO.webp" border-radius="50%" type="image/svg+xml">
    <link rel="icon" href="jieconstruction/User/webimage/LOGO.webp" border-radius="50%" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet">
    <title>JIE Services</title>
</head>
<style>
    body {
        background: linear-gradient(to left, #245682, #5a80a2);
    }

</style>

<body>
<header>
        <a href="homepage.html" class="logo">
            <img class="logo" src="webimage/Company-icon2.webp" alt="logo">
        </a>
    
        <ul class="navlist">
            <li><a href="homepage.php"><i class="fas fa-home"></i> HOME</a></li>
            <li><a class="active" href="services.php"><i class="fas fa-tools"></i> SERVICES</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i> CONTACT</a></li>
            <li><a href="aboutus.php"><i class="fas fa-user"></i> ABOUT US </a></li>
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
    <form action="">
        <div class="xontainer">
            <img class="xontainn" src="webimage/structural and civil works.jpg" alt="">
                <div class="enstruction">
                    <h1>STRUCTURAL & CIVIL WORKS</h1>
                    <label for="fullName">Full Name:</label>
                    <input type="text" name="fullName" placeholder="Enter your full name" required>
                    <label for="numBer">Contact Number:</label>
                    <input type="text" name="numBer" placeholder="Enter your contact number" required>
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" placeholder="Enter your email address" required>
                    <label for="Services">Type of Service Needed:</label>
                        <select class="in" id="Services" name="Services">
                        <option value=""></option>
                        <option value="First">Foundation Construction</option>
                        <option value="Second">Saab</option>
                        <option value="Third">Fiat</option>
                        <option value="Fourth">Audi</option>
                        </select>
                    <label for="location">Project Location:</label>
                    <input type="text" name="location" placeholder="Enter project location" required>
                    <label for="date">Preferred Start Date:</label>
                    <input class="inn" type="date" name="date">
                    <label for="budget">Estimated Budget:</label>
                    <input type="number" name="budget" placeholder="Enter your budget" required>
                    <button class="service-button">Confirm Services</button>
                </div>
        </div>
    </form>

</body>
<script src="jie1.js"></script>
<script>
    
  let profileMenu = document.getElementById("profileMenu");

function toggleMenu() {
    profileMenu.classList.toggle("open-menu")
}
</script>
</html>
    