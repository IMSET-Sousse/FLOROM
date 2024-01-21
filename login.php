<?php
if (isset($_POST) && $_POST) {
  include_once("lib\connection.php");

  $sql = "SELECT `id`, `name`, `email` FROM `user` WHERE `name` = '" . $_POST['name'] . "' and `password` = '" . $_POST['password'] . "';";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) == 0) {
    echo "User not found: Check your credentail";
  } else {
    $user = mysqli_fetch_assoc($result);

    session_start();
    // Set session variables
    $_SESSION["id"] = $user['id'];
    $_SESSION["email"] = $user['email'];
    $_SESSION["name"] = $user['name'];

    header('Location:home.php');
    die;
  }
  $conn->close();
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
    <h1>LOGIN</h1>
    <form name="form" action="login.php" method="POST">
      <label>Username/Email: </label>
      <input type="text" name="name" id="name" required><br><br>
      <label>Password: </label>
      <input type="password" name="password" id="password" required><br><br>
      <label>
        <input type="checkbox" name="check" id="check">
        Remember me
      </label>
      <a href="#">Forgot?</a><br><br>
      <input type="submit" id="btn" value="Log in" name="submit">
      <input type="submit" id="btn2" value="sign up" name="submit">
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>