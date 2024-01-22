<?php
session_start(); // Start the session
include_once("lib\connection.php");

if (isset($_POST['submit'])) {
  include "lib\connection.php";
  $name = mysqli_real_escape_string($conn, $_POST['user']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['pass']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

  $sql = "SELECT * FROM user WHERE name= '$name'";
  $result = mysqli_query($conn, $sql);
  $count_user = mysqli_num_rows($result);

  $sql = "SELECT * FROM user WHERE email= '$email'";
  $result = mysqli_query($conn, $sql);
  $count_email = mysqli_num_rows($result);

  if ($count_user == 0 || $count_email == 0) {
    if ($password == $cpassword) {
      $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email','$password')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        // Set session variables
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        // Redirect to a success page
        header("Location: login.php");
        exit();
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    } else {
      echo '<script>
                alert("Password do not match");
                window.location.href = "signup.php";
                </script>';
    }
  } else {
    echo '<script>
            alert("User already exists");
            window.location.href = "login.php";
            </script>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LOGIN</title>
  <link rel="stylesheet" href="log.css">
  <!-- bootstrap-links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- fontawsom link -->
  <script src="https://kit.fontawesome.com/1ed826f313.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include("./lib/nav.php") ?>

  <div id="form">
    <h1>Sign up</h1>
    <form name="form" action="signup.php" method="POST">
      <label>Username: </label>
      <input type="text" name="user" id="user" required><br><br>

      <label>Email:</label><br>
      <input type="email" name="email" id="email" required><br><br>

      <label>Password: </label>
      <input type="password" name="pass" id="pass" required><br><br>

      <label>Rewright Password: </label>
      <input type="password" name="cpass" id="cpass" required><br><br>

      <input type="submit" id="btn" value="sign up" name="submit">
    </form>
  </div>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
</body>
</html>