<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Maranan's Packages</title>
    <link rel="stylesheet" href="/CSS/package.css" />
    <link rel="website icon" type="png" href="/Images/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat";
}

a {
  text-decoration: none;
}

body {
  background-color: #87CEFA;
}

#package-link {
  background-color: #228b22;
  padding: 5px;
  
}

header {
  z-index: 1;
  position: fixed;
  text-align: center;
  width: 100%;
  font-family: "Montserrat";
  /* line-height: 11svh; */
  align-content: center;
  transition: top 0.5s;
}

header ul {
  display: inline-block;
}

header ul li {
  padding: 0 10px;
  display: inline-block;
  text-transform: uppercase;
}

header ul li a {
  margin: auto;
  text-align: center;
  align-items: center;
  color: #fff;
  /* color: #ded0b6; */
  margin: 0 10px;
  transition: 0.5s;
  position: relative;
  font-weight: 600;
}

header ul li a::after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  top: 25px;
  /* background-color: #0087ca; */
  background-color: #228b22;
  transform-origin: bottom right;
  transition: transform 0.4s ease-out;
}

header ul li a:hover::after {
  transform: scaleX(1);
  transform-origin: bottom left;
}

header button {
  border: none;
  padding: 13px 40px;
}

header .navlinks span {
  display: none;
}


/* IPAD SIZE */

@media screen and (max-width: 1033px) {
  header ul {
    position: absolute;
    top: 88px;
    left: 0;
    width: 100%;
    height: 100svh;
    background: #2c3e50;
    overflow: hidden;
    transition: max-height 0.5s;
    text-align: center;
    z-index: 9;
  }

  header ul li {
    padding-top: 30px;
    display: block;
  }

  header ul li a {
    color: white;
  }
  header .navlinks span {
    color: white;
    display: block;
    cursor: pointer;
    line-height: 14svh;
    font-size: 45px;
  }

  header img {
    padding-top: 15px;
  }

  header .navlinks #menulist li a button {
    font-weight: 800;
  }
}

/* PHONE SIZE */

@media screen and (max-width: 493px) {
  header ul {
    margin-top: 5px;
    top: 60px;
    height: 100svh;
  }

  /* header img {
    width: 50px;
    min-height: 5svh;
    line-height: 5svh;
  } */

  header .navlinks span {
    color: white;
    display: block;
    cursor: pointer;
    line-height: 14svh;
    font-size: 45px;
  }

  header .home .text h1 {
    /* margin-top: 40px; */
    font-size: 45px;
  }

  header .home p {
    font-size: 20px;
    width: 350px;
  }
}

#navbar {
  height: 50px;
  padding: 15px;
  position: fixed;
  top: 0;
  transform: translateY(-10px);
  background-color: #005f4b;
  font-family: "Montserrat";
  width: 100%;
  z-index: 1000;
  transition: top 0.5s;
}

.hidden {
  top: -70px; /* Adjust based on the height of your navbar */
}

/* PACKAGE */

.package-section h1 {
  margin-top: 50px;
  color: #228b22;
  cursor: default;
  font-weight: 800;
  /* text-align: center; */
  font-size: 48px;
  padding: 20px 0;
  text-transform: uppercase;
  margin-left: 7.5rem;
}

.package-items {
  display: flex;
  margin: auto;
  width: 90%;
  max-width: 100%;
}

.package-items .package-img img {
  width: 600px;
  border-radius: 20px;
}

.package-info {
  padding: 50px;
}

#package-title {
  display: block;
  text-align: center;
  font-size: 30px;
  font-weight: 800;
  color: #fafafa;
}

#package-time {
  font-weight: bold;
  font-family: "Montserrat";
  display: block;
  text-align: center;
}

#package-prices {
  text-align: center;
  text-transform: uppercase;
  font-family: "Montserrat";
  font-weight: bold;
  display: block;
}

#package-time,
#package-prices {
  color: #fafafa;
  font-size: 20px;
  margin-top: 22px;
}

.package-btn:hover {
  background-color: #2c3e50;
}

.package-details {
  border-radius: 5px;
  width: 95%;
  margin: 40px auto;
  background-color: #228b22;
  padding: 20px;
  display: flex;
  justify-content: space-evenly;
}

.package-details-info {
  width: 20%;
}

.package-details-info .package-details-info-items {
  padding: 5px;
}

.package-details-info .package-details-info-items i {
  color: #fafafa;
  margin-right: 5px;
}

.package-details-info .package-details-info-items span {
  color: #fafafa;
  font-size: 17px;
}
#divider {
  width: auto;
  height: 100px;
  /* background-color: blue; */
  margin: 0 20px;
  margin-bottom: 10px;
}
  </style>
  <body>
    <header>
      <div id="navbar">
        <div class="navlinks">
          <ul id="menulist">
            <li><a href="guest.php#home">Home</a></li>
            <li><a href="guest.php#story">Story</a></li>
            <li><a href="guest.php#about">About</a></li>
            <li><a href="package.php" id="package-link">Accommodation</a></li>
            <li><a href="guest.php#gallery">Gallery</a></li>
            <li><a href="guest.php#contact">Contact</a></li>
            <li>
              <a href="reservationform.php" id="btn_booking" target="_blank"
                >BOOK NOW</a
              >
          
            </li>
            <li><a href="index.php" id="btn_login">Login</a></li>
          </ul>
          <span class="fa fa-bars" onclick="menutoggle()"></span>
        </div>
      </div>
    </header>

    <section class="package-section" id="package">
      <h1>Cottages</h1>

      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/10p(4h).jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Pavilion <span style="color: #228b22;"></span></span>
          <span id="package-time" style="color: #228b22;">8:00 AM - 5:00 PM</span>
          <span id="package-prices"
            ><span style="color: #228b22;">Entrance Fee</span> : 150Php per head (Minimum of 10pax)</span
          >
          <span id="package-prices">
            <span style="color: #228b22;">Add-Ons</span> : Videoke-100Php
          </span>
        
          <span id="package-prices">
            100Php - fee for bbq grill 
          </span>
          <span id="package-prices" style="color: #228b22;"> Rental Fee : 400Php </span>
        </div>
      </div>

 
<div class="divider" id="divider"></div>
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/12p(5h).jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Daytour Weekdends & <span style="color: #228b22;">Holidays</span></span>
          <span id="package-time" style="color: #228b22;">9:00 AM - 5:00 PM</span>
          <span id="package-prices"
            ><span style="color: #228b22;">Entrance Fee</span> : 150Php per head (Minimum of 12pax)</span
          >
          <span id="package-prices">
            <span style="color:#228b22;">Add-Ons</span> : Air-Conditioned Room - 1500Php per room
          </span>
          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices" style="color: #228b22;"> Rental Fee : 500Php </span>
        </div>
      </div>
      <div class="divider" id="divider"></div>
      
      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/20p(7h).jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Day & Night Tour <span style="color: #228b22;">(22hrs)</span></span>
          <span id="package-time" style="color: #228b22;">9:00 AM - 7:30 AM</span>
          <span id="package-prices">Good for 25 pax or less</span>
          <span id="package-prices">200Php - per head in excess of 25 pax</span>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            <span style="color: #228b22;">Rental Fee : Sunday - Thursday (16,900Php)</span></span
          >
          <span id="package-prices" style="color: #3228b22;">Fri - Sat & Holidays (18,400Php)</span>
        </div>
      </div>
      <div class="divider" id="divider"></div>
      
      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/20p(1k).jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Night & Day Tour <span style="color: #228b22;">(22hrs)</span></span>
          <span id="package-time" style="color: #228b22;">6:30P PM - 5:00 PM</span>
          <span id="package-prices">Good for 25 pax or less</span>
          <span id="package-prices">200Php - per head in excess of 25 pax</span>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            Rental Fee : <span style="color: #228b22;">Sunday - Thursday (16,900Php)</span></span
          >
          <span id="package-prices" style="color: #228b22;">Fri - Sat & Holidays (18,400Php)</span>
        </div>
      </div>

  <div class="divider" id="divider"></div>
      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/IMG_4078.jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title" style="color: #228b22;">Overnight</span>
          <span id="package-time" style="color: #228b22;">6:30 PM - 7:30 AM</span>
          <span id="package-prices">Good for 25 pax or less</span>
          <span id="package-prices">180Php - per head in excess of 25 pax</span>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            Rental Fee : <span style="color: #228b22;">Sunday - Thursday (11,900Php)</span></span
          >
          <span id="package-prices" style="color: #228b22;">Fri - Sat & Holidays (12,900Php)</span>
        </div>
      </div>

      <div class="divider" id="divider"></div>
      <!-- SIXTH PACKAGE -->
      <!-- SIXTH PACKAGE -->
      <!-- SIXTH PACKAGE -->
      <!-- SIXTH PACKAGE -->
      <!-- SIXTH PACKAGE -->

    <div class="package-items">
      <div class="slideshow-container">
      <!-- Slide 1 -->
      <div class="slide package-img">
      <img src="Images/IMG_4139.jpg" alt="Room 1" />
      </div>

      <!-- Slide 2 -->
      <div class="slide package-img">
      <img src="Images/IMG_4140.jpg" alt="Room 2" />
      </div>

      <!-- Slide 3 -->
      <div class="slide package-img">
      <img src="Images/IMG_4141.jpg" alt="Room 2" />
      </div>

      <!-- Slide 4 -->
      <div class="slide package-img">
      <img src="Images/IMG_4142.jpg" alt="Room 2" />
      </div>

      <!-- Slide 5 -->
      <div class="slide package-img">
      <img src="Images/IMG_4143.jpg" alt="Room 2" />
      </div>

      <!-- Slide navigation buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

      <div class="package-info">
        <span id="package-title" style="color: #ffffff;">Room 1</span>
        <span id="package-time" style="color: #228b22;">6:30 PM - 7:30 AM</span>
        <span id="package-prices">Good for 25 pax or less</span>
        <span id="package-prices">180Php - per head in excess of 25 pax</span>

<style>
  .slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
  }
  
  .slide {
    display: none;
  }

  .slide img {
    width: 100%;
    border-radius: 8px;
  }

  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    color: white;
    font-weight: bold;
    transition: 0.6s ease;
    user-select: none;
  }

  .prev {
    left: 0;
  }

  .next {
    right: 0;
  }

  .package-info {
    text-align: center;
    padding: 10px;
    color: #fff;
  }
</style>

<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
  }
</script>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            Rental Fee : <span style="color: #228b22;">Sunday - Thursday (11,900Php)</span></span
          >
          <span id="package-prices" style="color: #228b22;">Fri - Sat & Holidays (12,900Php)</span>
        </div>
      </div>

      <div class="divider" id="divider"></div>
      <!-- SEVEN PACKAGE -->
      <!-- SEVEN PACKAGE -->
      <!-- SEVEN PACKAGE -->
      <!-- SEVEN PACKAGE -->
      <!-- SEVEN PACKAGE -->

    <div class="package-items">
      <div class="slideshow-container">
      <!-- Slide 1 -->
      <div class="slide package-img">
      <img src="Images/IMG_4139.jpg" alt="Room 1" />
      </div>

      <!-- Slide 2 -->
      <div class="slide package-img">
      <img src="Images/IMG_4144.jpg" alt="Room 2" />
      </div>

      <!-- Slide 3 -->
      <div class="slide package-img">
      <img src="Images/IMG_4145.jpg" alt="Room 2" />
      </div>

      <!-- Slide 4 -->
      <div class="slide package-img">
      <img src="Images/IMG_4146.jpg" alt="Room 2" />
      </div>

      <!-- Slide 5 -->
      <div class="slide package-img">
      <img src="Images/IMG_4147.jpg" alt="Room 2" />
      </div>

      <!-- Slide navigation buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

      <div class="package-info">
        <span id="package-title" style="color: #ffffff;">Room 1</span>
        <span id="package-time" style="color: #228b22;">6:30 PM - 7:30 AM</span>
        <span id="package-prices">Good for 25 pax or less</span>
        <span id="package-prices">180Php - per head in excess of 25 pax</span>

<style>
  .slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
  }
  
  .slide {
    display: none;
  }

  .slide img {
    width: 100%;
    border-radius: 8px;
  }

  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    color: white;
    font-weight: bold;
    transition: 0.6s ease;
    user-select: none;
  }

  .prev {
    left: 0;
  }

  .next {
    right: 0;
  }

  .package-info {
    text-align: center;
    padding: 10px;
    color: #fff;
  }
</style>

<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
  }
</script>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            Rental Fee : <span style="color: #228b22;">Sunday - Thursday (11,900Php)</span></span
          >
          <span id="package-prices" style="color: #228b22;">Fri - Sat & Holidays (12,900Php)</span>
        </div>
      </div>

      <div class="divider" id="divider"></div>

    <section id="gallery" class="gallery-section">
  <h2>Resort Gallery</h2>
  <div class="gallery-grid">
    <img src="Images/cottage1.jpg" alt="Cottage 1" onclick="openModal(this)">
    <img src="Images/cottage2.jpg" alt="Cottage 2" onclick="openModal(this)">
    <!-- Add more images as needed -->
  </div>
</section>
    <script src="JAVASCRIPT/package.js"></script>
  </body>
</html>
