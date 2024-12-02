<?php
// Include database configuration
include_once('./config/db.php');

// Enable or disable registration
$lockerReg = true;

// Check if registration is allowed
if ($lockerReg) {

    // Start session
    session_start();

    // Redirect logged-in users to the dashboard
    if (isset($_SESSION['user_id'])) {
        header("Location: $user_dashboard");
        exit();
    }

    // Initialize error message
    $errorMsg = "";

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {

        // Secure input data to avoid SQL injection
        $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $middleName = mysqli_real_escape_string($con, $_POST['middleName']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        // Generate a unique user ID
        $user_id = uniqid();
        $role = 'Admin'; // Default role for new users

        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Validate inputs
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg = 'Invalid email address.';
        } elseif (strlen($password) < 6) {
            $errorMsg = 'Password must be at least 6 characters long.';
        } else {
            // Check if the email already exists in the database
            $sql = "SELECT * FROM $tableUser WHERE email = '$email'";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $errorMsg = 'This email is already registered.';
            } else {
                // Insert the user into the database
                $query = "INSERT INTO $tableUser (user_id, lastName, firstName, middleName, number, email, password, role) 
                          VALUES ('$user_id', '$lastName', '$firstName', '$middleName', '$number', '$email', '$hashedPassword', '$role')";
                $insertResult = mysqli_query($con, $query);

                // Redirect to login page if registration is successful
                if ($insertResult) {
                    header("Location: $loginPage");
                    exit();
                } else {
                    $errorMsg = 'Registration failed. Please try again.';
                }
            }
        }
    }

} else {
    echo "Registration is currently disabled.";
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
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">

                <!-- Display error message if set -->
                <?php if (isset($errorMsg) && !empty($errorMsg)): ?>
                    <div class='alert alert-warning alert-dismissible fade show'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                        <?php echo $errorMsg; ?>
                    </div>
                <?php endif; ?>

                <h1 class="text-center mb-5">Register</h1>

                <!-- Registration form -->
                <form action="" method="post" class="row g-3">
                    <!-- Last Name Field -->
                    <div class="col-md-4">
                        <label for="lastName" class="form-label">Last Name :</label>
                        <input type="text" name="lastName" class="form-control" placeholder="Cortez" required>
                    </div>

                    <!-- First Name Field -->
                    <div class="col-md-4">
                        <label for="firstName" class="form-label">First Name :</label>
                        <input type="text" name="firstName" class="form-control" placeholder="Jenelyn" required>
                    </div>

                    <!-- Middle Name Field -->
                    <div class="col-md-4">
                        <label for="middleName" class="form-label">Middle Name :</label>
                        <input type="text" name="middleName" class="form-control" placeholder="M.">
                    </div>

                    <!-- Phone Number Field -->
                    <div class="col-md-12">
                        <label for="phoneNumber" class="form-label">Phone No :</label>
                        <input type="text" name="number" class="form-control" placeholder="1234567890">
                    </div>

                    <!-- Email Field -->
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control" placeholder="marananresort@gmail.com" required>
                    </div>

                    <!-- Password Field -->
                    <div class="col-md-12">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" name="password" class="form-control" placeholder="******" minlength="6" required>
                    </div>

                    <!-- Login Redirect Link -->
                    <p>Already have an account? <a href="<?php echo $loginPage ?>">Login</a></p>

                    <!-- Submit Button -->
                    <div class="col-12 text-center">
                        <input class="btn btn-primary" type="submit" name="register" value="Register">
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
