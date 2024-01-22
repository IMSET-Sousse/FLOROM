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
  <section class="contact-section" id="contact">
    <h2>Contact Us</h2>
    <div class="contact-box">
      <div class="contact-left">
        <h3>Send yor request</h3>
        <form action="contact.php" method="post">
          <div class="input-row">
            <div class="input-groupe">
              <lable for="name">Name</lable>
              <input id="name" name="name" type="text" placeholder="Name">
            </div>

            <div class="input-groupe">
              <lable for="email">Email</lable>
              <input id="email" name="email" type="email" placeholder="Example@gmail.com">
            </div>

          </div>

          <div class="input-row">
            <div class="input-groupe">
              <lable for="number">Phone number</lable>
              <input id="number" name="number" type="number" placeholder="phone number">
            </div>

            <div class="input-groupe">
              <lable for="subject">subject</lable>
              <input id="subject" name="subject" type="text" placeholder="Service demo">
            </div>
          </div>
          <lable for="message">Message</lable>
          <textarea name="message" id="message" rows="5" placeholder="Leave a message"></textarea>
          <button type="submit">Send</button>

        </form>
      </div>
      <div class="contact-right">
        <h3>Reach Us</h3>
        <table>
          <tr>
            <td>Email:</td>
            <td>contactus@example.com</td>
          </tr>

          <tr>
            <td>Phone:</td>
            <td>+00 012 345 857</td>
          </tr>

          <tr>
            <td>Adress:</td>
            <td>#Los Angelos ,445 Grounf floor<br>
              7th cross, 28 Axander Rode<br>
            </td>
          </tr>

          <tr>
            <td><i class="fa-brands fa-whatsapp fa-2xl" style="color: #ffffff;"></i></td>
            <td><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></td>
          </tr>
        </table>
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
