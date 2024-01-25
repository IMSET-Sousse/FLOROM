<?php
include_once("lib\connection.php");

$search = '';
if (isset($_GET) && $_GET && $_GET['search']) {
  $search = $_GET['search'];
  $sql = "SELECT * FROM `product` WHERE `name` LIKE '%" . $_GET['search'] . "%' or `price` LIKE '%" . $_GET['search'] . "%';";
} else {
  $sql = "SELECT * FROM `product`";
}

$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <!-- bootstrap-links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- fontawsom link -->
  <script src="https://kit.fontawesome.com/1ed826f313.js" crossorigin="anonymous"></script>
</head>
<style>



</style>

<body>

  <?php include("./lib/nav.php") ?>
  <!-- Search bar -->
  <form action="Tuxedos.php" method="get" class="boxcontainer">
    <table class="elementscontainer">
      <tr>
        <td>
          <input type="text" name="search" id="search" class="search" placeholder="Search" value="<?= $search ?>">
        </td>
        <td>
          <button type="submit" id="search-btn" value="Search">
            <i class="fa-solid fa-magnifying-glass" style="color: #d1b3c4;"></i>
          </button>
        </td>
      </tr>
    </table>
  </form>
  <!-- product section -->

  <section class="product_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Tuxedos
        </h2>
        <p>
          which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
        </p>
      </div>
      <div class="row">

        <?php
        // Check if there are search results
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-sm-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <a href="#">
                    <img src="<?php echo $row['image']; ?>" alt="">
                  </a>
                </div>
                <div class="detail-box">
                  <span class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                  </span>
                  <a href="">
                    <?php echo $row['name']; ?>
                  </a>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> <?php echo $row['price']; ?>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<p>No results found.</p>";
        }
        ?>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.082);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>