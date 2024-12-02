<?php
include_once("./config/db.php");

function redirect_with_message($url, $message) {
    header("Location: $url?message=" . urlencode($message));
    exit();
}

// Check if the token is provided
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Validate token format
    if (!preg_match('/^[a-zA-Z0-9]{64}$/', $token)) {
        redirect_with_message('index.php', 'Invalid token.');
    }

    // Check if the token exists and is not expired
    $query = "SELECT * FROM users WHERE reset_token = ? AND token_expiry > NOW() LIMIT 1";
    $stmt = $con->prepare($query);
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Handle password reset form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['password'])) {
                $new_password = $_POST['password'];

                // Password validation
                if (strlen($new_password) < 6) {
                    echo "Password must be at least 6 characters long.";
                    exit();
                }

                // Hash the new password
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Update the user's password and clear the token
                $update_query = "UPDATE users SET password = ?, reset_token = NULL, token_expiry = NULL WHERE reset_token = ?";
                $update_stmt = $con->prepare($update_query);
                $update_stmt->bind_param('ss', $hashed_password, $token);
                $update_stmt->execute();

                redirect_with_message('index.php', 'Password reset successfully. You can now log in with your new password.');
            } else {
                echo "Please provide a valid password.";
            }
        }
    } else {
        echo "Invalid or expired token.";
    }
} else {
    echo "No token provided.";
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
    <title>Reset Password</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
            <form action="reset_password.php?token=<?php echo htmlspecialchars($token); ?>" method="post" class="row g-3">
            <div class="col-md-12">
                <label for="password" class="form-label">New Password:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="******" minlength="6" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>

    <p>Don't have an account? <a href="<?php echo $registerPage ?>">Register</a></p>
    
    <!-- Forgot Password link -->
    <div class="col-md-12 text-end">
        <p>Already have an account? <a href="<?php echo $loginPage ?>">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
