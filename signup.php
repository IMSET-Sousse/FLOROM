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
  <title>Car Wash Website</title>
  <link rel="stylesheet" href="log.css">
  <!--bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&family=Roboto:wght@500&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include("/xampp/htdocs/GalaGaze/lib/nav.php") ?>

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