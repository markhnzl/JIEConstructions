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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <title>JIE Constructions INC.</title>
    <link rel="icon" href="webimage/LOGO.webp" border-radius="50%" type="image/svg+xml">
</head>


<body>
  
    <header>
      <a href="#home" class="logo">
        <img class="logo" src="webimage/Company-icon2.webp" alt="logo">
    </a>

    <ul class="navlist">
        <li><a class="active" href="homepage.php"><i class="fas fa-home"></i> HOME</a></li>
        <li><a href="services.php"><i class="fas fa-tools"></i> SERVICES</a></li>
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
   
  <form action="services.php">
      
    <div class="container" id="home">
      <img class="imageee" src="webimage/homebgg.png" alt="">
      <div class="main-state">
        <h1>QUALITY. SAFETY. </h1>
        <h1>RELIABILITY.  </h1>
        <h1>EVERY TIME </h1>
  
        <p>Journey Into Excellence</p>
        <button class="btn1" type="submit" >View Services</button>
      </div>
    </div> 
    </form >    
  

<section class="ser">
  <div class="container1">
  <div class="service-wrapper">
  <div class="serv" data-aos="fade-up" data-aos-duration="1000">
    <h1>Our Services</h1>
     <div class="container-box">
        <div class="box" onclick="window.location.href='services.php'">
            <h2>STRUCTURAL & CIVIL WORKS</h2>
            <h3>Get sturdy, safe, and high-quality structures built to last, ensuring
              durability, compliance, and efficiently.
            </h3>
          </div>

        <div class="box" onclick="window.location.href='services.php'">
            <h2>ARCHITECTURE & INTERIOR DESIGN</h2>
            <h3>Create and functional designs that 
              elevate your space and reflect your 
              style.</h3>
        </div>
        
        <div class="box" onclick="window.location.href='services.php'">
            <h2>ELECTRICAL WORKS</h2>
            <h3>Trusted and safe electrical services for 
              efficient, trouble-free performance.</h3>
        </div>
        
      
     
        <div class="box" onclick="window.location.href='services.php'">
            <h2>SPECIALTY WORKS</h2>
            <h3>Professional installation of specialized
              systems to ensure safety, comfort, and 
              energy efficiency.
            </h3>
        </div>

        <div class="box" onclick="window.location.href='services.php'">
            <h2>PAINTING WORKS (EXTERIOR DESIGN)</h2>
            <h3>Long-lasting exterior painting that 
              boost curb appeal and offers
              protection.
            </h3>
        </div>
        
        <div class="box" onclick="window.location.href='services.php'">
            <h2>PAINTING WORKS (INTERIOR DESIGN)</h2>
            <h3>Professional interior painting that adds
              beauty and a welcoming feel to yourspace.
            </h3>
        </div>
    
     
      <div class="box" onclick="window.location.href='services.php'">
          <h2>PLUMBING & SANITARY WORKS</h2>
          <h3>Reliable plumbing and sanitary services
            ensuring efficient water flow
            and safe sanitation.
          </h3>
      </div>
     </div>
  </div>
  </div>
  </div>
</section>
  <section class="about">
    <div class="about-us">
        <h1>What we do</h1>
        <p>Spectrum of construction services from general construction<br>
            to specialty contracting. Personnel deployment, building<br>
            servicing and maintenance.
        </p>
        <a class="btn2" href="contact.php">Learn more</a>
    </div>
  </section>
  <section class="contact">
    <div class="contact-us">
        <h1>Ready to experience JIE Constructions INC.?</h1>
        <p>Spectrum of construction services from general construction<br>
            to specialty contracting. Personnel deployment, building<br>
            servicing and maintenance.
        </p>
        <a class="btn2" href="aboutus.php">Reach us</a>
    </div>
  </section>
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
        <a href="aboutus.php"><i class="fas fa-user"></i> About us</a>
        <a href="contact.php"><i class="fas fa-envelope"></i> Contact us</a>
        
      </div>
      <div class="footer-terms">
        <h4>LEGAL</h4>
        <a href="#"><i class="fas fa-file-contract"></i> Terms and Condition</a>
        <a href="#"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
        
      </div>
    </div>
  </footer>

</footer>


</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="jie1.js"></script>

<script>
  var delayInMiliseconds = 0;
  setTimeout(function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }, delayInMiliseconds);

  AOS.init();
  setTimeout;


  let profileMenu = document.getElementById("profileMenu");

function toggleMenu() {
    profileMenu.classList.toggle("open-menu")
}
</script>
</html>