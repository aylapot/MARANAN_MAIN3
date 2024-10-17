<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  html {
  scroll-behavior: smooth;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 400px;
    margin: auto;
    background: white;
    padding: 120px 50px 50px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);

}

h1 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

#dateStatus {
    height: 20px;
    font-weight: bold;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
}
a {
  text-decoration: none;
  color: #fff;
}
button:hover {
    background-color: #218838;
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
  color: #fafafa;
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

#navbar {
  height: 50px;
  padding: 15px;
  position: fixed;
  top: 0;
  background-color: #1034A6;
  width: 100%;
  z-index: 1000;
  transition: top 0.5s;
}

/* IPAD SIZE */

@media screen and (max-width: 1033px) {
  header ul {
    position: absolute;
    top: 48px;
    left: 0;
    width: 100%;
    height: 100svh;
    background: #000;
    overflow: hidden;
    text-align: center;
    z-index: 9;
  }

  header ul li {
    padding-top: 50px;
    display: block;
  }

  header ul li a {
    color: white;
  }
  header .navlinks span {
    color: white;
    display: block;
    cursor: pointer;
    line-height: 3svh;
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
    line-height: 3svh;
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
              <a href="reservationform.php" id="btn_booking" target="_blank"
                >BOOK NOW</a
              >
            </li>
          </ul>
          <span class="fa fa-bars" onclick="menutoggle()"></span>
        </div>
      </div>
    </header>
    <div class="container">
        <h1>Reservation Form</h1>
        <form id="reservationForm" method="POST" action="submit.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date" required>
            <div id="dateStatus"></div>

            <button type="submit">Reserve</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
