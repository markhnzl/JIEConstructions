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
    <link rel="icon" href="webimage/LOGO.webp" border-radius="50%" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet">
    <title>JIE Services</title>
</head>
<body>
    <style>
        body {
            background: linear-gradient(to left, #376a97, #2e6697);
        }
    </style>
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

    
  


    <div class="service-s"><h1>Services</h1></div>
    <div class="service">
        <div class="service-container">
            <div class="picture">
                <img src="webimage/structural and civil works.jpg" alt="">
                <div class="content">
                    <h1>STRUCTURAL & CIVIL WORKS</h1>
                    <h5><i class="fa-solid fa-circle-check"></i> Foundation Construction and reinforcement</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Structural steel fabrication and erection</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Concrete pouring and formwork</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Earthworks and excavation</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Road and pavement construction</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Drainage and stormwater management</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Retaining walls and slope stabilization</h5>
                </div>
                </div>
            <p>STRUCTURAL & CIVIL WORKS</p>
            <a href="Structural.php">Book now!</a>
            <input type="submit" class="Add" value="Add to my services">
        </div>
        <div class="service-container">
            <div class="picture">
                <img src="webimage/architetural and interior design.jpg" alt="">
                <div class="content">
                    <h1>ARCHITECTURE & INTERIOR DESIGN</h1>
                    <h5><i class="fa-solid fa-circle-check"></i> Space planning and layout design</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> 3D visualization and  rendering</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Building facade design</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> interior fit-out and finishing</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Lighting and acoustic design</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Green building design and sustainable architecture</h5>
                   
                </div>
                </div>
            <p>ARCHITECTURE & INTERIOR DESIGN</p>
            <a href="architecture.php">Book now!</a>
            <input type="submit" class="Add" value="Add to my services">
        </div>
        <div class="service-container">
            <div class="picture">
                <img src="webimage/electrical works.jpg" alt="">
                <div class="content">
                    <h1>ELECTRICAL WORKS</h1>
                    <h5><i class="fa-solid fa-circle-check"></i> Electrical system design and istallation</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Power distribution and lighting systems</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Generator installation and maintenance</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Septic tank and waste treatment systems</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Fire alarm and security systems</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Data and communication wiring</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Circuit breaker installation and upgrades</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Energy-efficient solutions and renewable energy systems</h5>
                </div>
                </div>
            <p>ELECTRICAL WORKS</p>
            <a href="electrical.php">Book now!</a>
            <input type="submit" class="Add" value="Add to my services">
        </div>
        <div class="service-container">
            <div class="picture">
            <img src="webimage/specialty works.jpg" alt="">
            <div class="content">
                <h1>SPECIALTY WORKS</h1>
                <h5><i class="fa-solid fa-circle-check"></i> Fire protection systems(sprinklers, smoke detectors)</h5>
                <h5><i class="fa-solid fa-circle-check"></i> Waterproofing and insulation</h5>
                <h5><i class="fa-solid fa-circle-check"></i> Acoustic treatments and soundproofing</h5>
                <h5><i class="fa-solid fa-circle-check"></i> Curtain wall and cladding installation</h5>
                <h5><i class="fa-solid fa-circle-check"></i> HVAC (Heating, Ventilation, and Air Conditioning) systems</h5>
                <h5><i class="fa-solid fa-circle-check"></i> Elevator and escalator installation</h5>
                <h5><i class="fa-solid fa-circle-check"></i> Solar panel and alternative energy systems</h5>
            </div>
            </div>
            <p>SPECIALTY WORKS</p>
            <a href="specialty.php">Book now!</a>
            <input type="submit" class="Add" value="Add to my services">
        </div>
        <div class="service-container">
            <div class="picture">
                <img src="webimage/painting works ED.jpg" alt="">
                <div class="content">
                    <h1>PAINTING WORKS (EXTERIOR DESIGN)</h1>
                    <h5><i class="fa-solid fa-circle-check"></i> Full Exterior House Paintig</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Deck and Fence Painting/Staining</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Acoustic treatments and soundproofing</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Trim, Doors, and Windows Painting</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Exterior Wall Repair and Painting</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Metal and Railing Painting</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Exterior Design Consultation</h5>
                </div>
                </div>
            <p>PAINTING WORKS (EXTERIOR DESIGN)</p>
            <a href="paintingexterior.php">Book now!</a>
            <input type="submit" class="Add" value="Add to my services">
        </div>
        <div class="service-container">
            <div class="picture">
                <img src="webimage/painting works ID.jpg" alt="">
                <div class="content">
                    <h1>PAINTING WORKS (INTERIOR DESIGN)</h1>
                    <h5><i class="fa-solid fa-circle-check"></i> Complete Interior Home Painting</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Accent Wall Painting</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Finishes like textured or metallic paints on a single wall.</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Cabinet Painting and Refinishing</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Ceiling and Trim Painting</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Wallpaper Removal and installation </h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Color Consultation and Design Advice</h5>
                </div>
                </div>
            <p>PAINTING WORKS (INTERIOR DESIGN)</p>
            <a href="paintinginterior.php">Book now!</a>
            <input type="submit" class="Add" value="Add to my services">
        </div>
        <div class="service-container">
            <div class="picture">
                <img src="webimage/plumbing and sanitary works.jpg" alt="">
                <div class="content">
                    <h1>PLUMBING & SANITARY WORKS</h1>
                    <h5><i class="fa-solid fa-circle-check"></i> Water supply system installation</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Drainage and sewage system installation</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Pipefitting and leak detection </h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Septic tank and waste treatment systems </h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Hot and cold water systems</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Stormwater management systems</h5>
                    <h5><i class="fa-solid fa-circle-check"></i> Sanitary fixture installation (toilets, faucets, etc.)</h5>
                </div>
                </div>
            <p>PLUMBING & SANITARY WORKS</p>
            <a href="plumbing.php">Book now!</a>
            <input type="submit" class="Add" value="Add to my services">
        </div>
    </div>
    

        <footer class="footer1">
            <div class="footer-container1">
              <div class="footer-links1">
                <h4>Quick Links</h4>
                <ul>
                  <a href="#homebgg"><i class="fas fa-home"></i> Homepage</a>
                  <a href="#serv"><i class="fas fa-tools"></i> Services</a>
                </ul>
              </div> 
              <div class="footer-company1">
                <h4>COMPANY</h4>
                <a href="aboutus.html"><i class="fas fa-user"></i> About us</a>
                <a href="contact.html"><i class="fas fa-envelope"></i> Contact us</a>
                
              </div>
              <div class="footer-terms1">
                <h4>LEGAL</h4>
                <a href="#"><i class="fas fa-file-contract"></i> Terms and Condition</a>
                <a href="#"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
                
              </div>
            </div>
          </footer>
    
</body>
<script src="jie1.js"></script>
<script>
  let profileMenu = document.getElementById("profileMenu");

function toggleMenu() {
    profileMenu.classList.toggle("open-menu")
}
</script>
</html>