<?php

$locker = 1;
include_once("./config/db.php");

// Check if session is already active
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: $user_dashboard");
}

if (isset($_POST['login'])) {

    $errorMsg = "";

    // Secure form data using mysqli_real_escape_string
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (!empty($email) && !empty($password)) {

        // Query to check if the email exists in the database
        $query = "SELECT * FROM $tableUser WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        // If email exists, verify the password
        if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    // Set session using user_id instead of id
                    $_SESSION['user_id'] = $row['user_id'];
                    header("Location: $user_dashboard");
                } else {
                    $errorMsg = "Email or Password is invalid";
                }
            }
        } else {
            $errorMsg = "No user found";
        }
    } else {
        $errorMsg = "Email and Password cannot be empty";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
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
    background: linear-gradient(to bottom, #002b1f, #1c1c1c);
    color: #fff;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}


.container {
  background: gray; /* Lighter gradient for the form container */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #fff;
}

input[type="email"], input[type="password"] {
    background-color: #f8f9fa; /* Light background for inputs */
    border: 1px solid #ddd;
}

input[type="submit"] {
    background-color:  #333333; /* Light green for the button */
    border: none;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #555555; /* Darker green on hover */
}

.alert-warning {
    background-color: #ffeb3b; /* Yellow background for error message */
    color: #000;
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
  background-color: #228b22;;
  transform-origin: bottom right;
  transition: transform 0.4s ease-out;x`
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
  transform: translateY(-10px);
  top: 0;
  background-color: #005f4b;
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
<header>
    <div id="navbar">
        <div class="navlinks">
            <ul id="menulist">
                <li><a href="guest.php#home">Home</a></li>
                <li><a href="guest.php#story">Story</a></li>
                <li><a href="guest.php#about">About</a></li>
                <li><a href="package.php">Accommodation</a></li>
                <li><a href="guest.php#gallery">Gallery</a></li>
                <li><a href="guest.php#contact">Contact</a></li>
                <li><a href="reservationform.php" target="_blank">BOOK NOW</a></li>
                <li><a href="index.php">Login</a></li>
            </ul>
        </div>
    </div>
</header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <?php
            if (isset($errorMsg)) {
                echo
                "
                <div class='alert alert-warning alert-dismissible fade show'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                $errorMsg
                </div>
                ";
            }
            ?>
            <h1 class="text-center mb-5">Login</h1>
            <form action="" method="post" class="row g-3">
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Email :</label>
                    <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="marananresort@gmail.com" required>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Password :</label>
                    <input type="password" name="password" class="form-control" id="validationCustom01" placeholder="******" minlength="6" required>
                </div>

                <p>Don't have account? <a href="<?php echo $registerPage ?>">Register</a></p>
                <div class="col-12 text-center">
                    <input class="btn btn-primary" type="submit" name="login" value="Login">
                </div>
                <!-- Add the forgot password link here -->
                <div class="col-md-12 text-end">
                    <p>Forgot Password?<a href="reset_password.php" class="text-primary"> Reset Password</a></p>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>