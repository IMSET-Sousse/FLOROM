<?php
if (isset($_POST) && $_POST) {
    include_once("lib\connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) 
        VALUES ('$name', '$email', '$subject', '$message');";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success page
        header("Location:home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- bootstrap-links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- fontawsom link -->
    <script src="https://kit.fontawesome.com/1ed826f313.js" crossorigin="anonymous"></script>
  </head>
  
  <body>
  <!-- navbar -->
  <?php include("./lib/nav.php") ?>
  
  <!-- contact -->
    <section class="container">
      <div class="cont-fluid">
      <h1>Contact</h1>
      <div class="row">
        <div class="col-md-7">
          <h4>Get in Touch</h4>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label" name="name">Name</label>
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput"
              placeholder="Enter your name"
            />
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label" name="email">Email</label>
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput2"
              placeholder="Enter your email"
            />
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label" name="subject"
              >Subject</label
            >
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput2"
              placeholder="Enter your number"
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="message"
              >Message</label
            >
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
          </div>
          <button class="btn btn-primary" type="submit" id="button">Send</button>
        </div>
        <div class="col-md-5">
          <h4>Our Contact</h4>
          <hr />
          <div class="mt-4">
            <div class="d-flex">
              <i class="bi bi-geo-alt-fill"></i>
              <p>Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <hr />
            <div class="d-flex">
              <i class="bi bi-telephone-fill"></i>
              <p>Contact :- 8888888888</p>
            </div>
            <hr />
            <div class="d-flex">
              <i class="bi bi-envelope-fill"></i>
              <p>Email:- florom@gmail.com</p>
            </div>
            <hr />
            <div class="d-flex">
              <i class="bi bi-browser-chrome"></i>
              <p>Website: www.florom.com</p>
            </div>
            <hr />
          </div>
        </div>
      </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
