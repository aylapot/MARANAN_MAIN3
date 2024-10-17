<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modesto's Packages</title>
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
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

a {
  text-decoration: none;
}

body {
  background-color: #000;
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
  background-color: #000;
  position: fixed;
  top: 0;
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
  color: #32fb32;
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

  </style>
  <body>
    <header>
      <div id="navbar">
        <div class="navlinks">
          <ul id="menulist">
            <li><a href="guest.php#home">Home</a></li>
            <li><a href="guest.php#story">Story</a></li>
            <li><a href="guest.php#about">About</a></li>
            <li><a href="package.php" id="package-link">Packages</a></li>
            <li><a href="guest.php#gallery">Gallery</a></li>
            <li><a href="guest.php#contact">Contact</a></li>
            <li>
              <a href="index.php" id="btn_booking" target="_blank"
                >BOOK NOW</a
              >
            </li>
          </ul>
          <span class="fa fa-bars" onclick="menutoggle()"></span>
        </div>
      </div>
    </header>

    <section class="package-section" id="package">
      <h1>Packages</h1>
     
      </div>

      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->
      <!-- FIRST PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/Gallery3.jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Daytour <span style="color: #32fb32;">Weekdays</span></span>
          <span id="package-time" style="color: #32fb32;">9:00 AM - 5:00 PM</span>
          <span id="package-prices"
            ><span style="color: #32fb32;">Entrance Fee</span> : 150Php per head (Minimum of 15pax)</span
          >
          <span id="package-prices">
            <span style="color: #32fb32;">Add-Ons</span> : Air-Conditioned Room - 1500Php per room
          </span>
          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices" style="color: #32fb32;"> Rental Fee : 3500Php </span>
        </div>
      </div>

      <div class="package-details">
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>20% discount for PWD and Senior Citizens only</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children below 3 feet of height - Free of Charge</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Swimming Pool(Adult,Kiddie,Jacuzzi)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pavillion Hall(With Cushioned Sofas)</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pool Deck Area(with Loungers)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Gazebo(with cushioned sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Sports Facilities ( Basketball , Billiard , Badminton ,
              Volleyball , Dart , Chess , and Air Hockey)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Multi-purpose Area(with Cignal TV)</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Garden Area(with concrete tables and benches)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Cooking and Grilling Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Videoke / Netflix / Sound System</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Farm Walking/Roaming Area</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Secured Parking Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children's Playground</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free WI-FI</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free Unlimited Drinking Water</span>
          </div>
        </div>
      </div>

      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->
      <!-- SECOND PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/Gallery4.jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Daytour Weekdends & <span style="color: #32fb32;">Holidays</span></span>
          <span id="package-time" style="color: #32fb32;">9:00 AM - 5:00 PM</span>
          <span id="package-prices"
            ><span style="color: #32fb32;">Entrance Fee</span> : 150Php per head (Minimum of 15pax)</span
          >
          <span id="package-prices">
            <span style="color: #32fb32;">Add-Ons</span> : Air-Conditioned Room - 1500Php per room
          </span>
          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices" style="color: #32fb32;"> Rental Fee : 4000Php </span>
        </div>
      </div>

      <div class="package-details">
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>20% discount for PWD and Senior Citizens only</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children below 3 feet of height - Free of Charge</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Swimming Pool(Adult,Kiddie,Jacuzzi)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pavillion Hall(With Cushioned Sofas)</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pool Deck Area(with Loungers)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Gazebo(with cushioned sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Sports Facilities ( Basketball , Billiard , Badminton ,
              Volleyball , Dart , Chess , and Air Hockey)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Multi-purpose Area(with Cignal TV)</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Garden Area(with concrete tables and benches)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Cooking and Grilling Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Videoke / Netflix / Sound System</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Farm Walking/Roaming Area</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Secured Parking Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children's Playground</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free WI-FI</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free Unlimited Drinking Water</span>
          </div>
        </div>
      </div>

      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->
      <!-- THIRD PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/Gallery5.jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Day & Night Tour <span style="color: #32fb32;">(22hrs)</span></span>
          <span id="package-time" style="color: #32fb32;">9:00 AM - 7:30 AM</span>
          <span id="package-prices">Good for 25 pax or less</span>
          <span id="package-prices">200Php - per head in excess of 25 pax</span>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            <span style="color: #32fb32;">Rental Fee : Sunday - Thursday (16,900Php)</span></span
          >
          <span id="package-prices" style="color: #32fb32;">Fri - Sat & Holidays (18,400Php)</span>
        </div>
      </div>

      <div class="package-details">
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children below 3 feet of height - Free of Charge</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Swimming Pool(Adult,Kiddie,Jacuzzi)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pavillion Hall(With Cushioned Sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>2 Air-Conditioned room with C.R.</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pool Deck Area(with Loungers)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Gazebo(with cushioned sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Sports Facilities ( Basketball , Billiard , Badminton ,
              Volleyball , Dart , Chess , and Air Hockey)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Multi-purpose Area(with Cignal TV)</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Garden Area(with concrete tables and benches)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Cooking and Grilling Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Videoke / Netflix / Sound System ( *STRICLY NO VIDEOKE FROM 10PM
              ONWARDS)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Farm Walking/Roaming Area</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Secured Parking Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children's Playground</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free WI-FI</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free Unlimited Drinking Water</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Maximum of 4 Tents with bed, pillows and blanket</span>
          </div>
        </div>
      </div>

      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->
      <!-- FOURTH PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/Gallery15.jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title">Night & Day Tour <span style="color: #32fb32;">(22hrs)</span></span>
          <span id="package-time" style="color: #32fb32;">6:30P PM - 5:00 PM</span>
          <span id="package-prices">Good for 25 pax or less</span>
          <span id="package-prices">200Php - per head in excess of 25 pax</span>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            Rental Fee : <span style="color: #32fb32;">Sunday - Thursday (16,900Php)</span></span
          >
          <span id="package-prices" style="color: #32fb32;">Fri - Sat & Holidays (18,400Php)</span>
        </div>
      </div>

      <div class="package-details">
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children below 3 feet of height - Free of Charge</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Swimming Pool(Adult,Kiddie,Jacuzzi)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pavillion Hall(With Cushioned Sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>2 Air-Conditioned room with C.R.</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pool Deck Area(with Loungers)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Gazebo(with cushioned sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Sports Facilities ( Basketball , Billiard , Badminton ,
              Volleyball , Dart , Chess , and Air Hockey)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Multi-purpose Area(with Cignal TV)</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Garden Area(with concrete tables and benches)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Cooking and Grilling Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Videoke / Netflix / Sound System ( *STRICLY NO VIDEOKE FROM 10PM
              ONWARDS)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Farm Walking/Roaming Area</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Secured Parking Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children's Playground</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free WI-FI</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free Unlimited Drinking Water</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Maximum of 4 Tents with bed, pillows and blanket</span>
          </div>
        </div>
      </div>

      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->
      <!-- FIFTH PACKAGE -->

      <div class="package-items">
        <div class="package-img">
          <img src="Images/Gallery16.jpg" alt="" />
        </div>
        <div class="package-info">
          <span id="package-title" style="color: #32fb32;">Overnight</span>
          <span id="package-time" style="color: #32fb32;">6:30 PM - 7:30 AM</span>
          <span id="package-prices">Good for 25 pax or less</span>
          <span id="package-prices">180Php - per head in excess of 25 pax</span>

          <span id="package-prices">
            200Php - one time fee for bringing-in liquor
          </span>
          <span id="package-prices">
            200Php - one time fee for LPG consumption
          </span>
          <span id="package-prices">
            Rental Fee : <span style="color: #32fb32;">Sunday - Thursday (11,900Php)</span></span
          >
          <span id="package-prices" style="color: #32fb32;">Fri - Sat & Holidays (12,900Php)</span>
        </div>
      </div>

      <div class="package-details">
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children below 3 feet of height - Free of Charge</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Swimming Pool(Adult,Kiddie,Jacuzzi)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pavillion Hall(With Cushioned Sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>2 Air-Conditioned room with C.R.</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Pool Deck Area(with Loungers)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Gazebo(with cushioned sofas)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Sports Facilities ( Basketball , Billiard , Badminton ,
              Volleyball , Dart , Chess , and Air Hockey)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Multi-purpose Area(with Cignal TV)</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Garden Area(with concrete tables and benches)</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Cooking and Grilling Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span
              >Videoke / Netflix / Sound System ( *STRICLY NO VIDEOKE FROM 10PM
              ONWARDS)</span
            >
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Farm Walking/Roaming Area</span>
          </div>
        </div>
        <div class="package-details-info">
          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Secured Parking Area</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Children's Playground</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free WI-FI</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Free Unlimited Drinking Water</span>
          </div>

          <div class="package-details-info-items">
            <i class="fa-solid fa-circle-check"></i>
            <span>Maximum of 4 Tents with bed, pillows and blanket</span>
          </div>
        </div>
      </div>
    </section>

    <script src="JAVASCRIPT/package.js"></script>
  </body>
</html>
