

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

  <br><br>

      <!-- Search bar -->
      <form class="boxcontainer">
        <table class="elementscontainer">
            <tr>
                <td>
                    <input type="text" name="search" id="search" class="search" placeholder="Search">
                </td>
                <td>
                    <button type="submit" id="search-btn" value="Search">
                        <i class="fa-solid fa-magnifying-glass" style="color: #0fbcf9;"></i>
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <br><br>
    <!--cards-->

    <section class="product_section layout_padding2-top layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Bridal Dresses
            </h2>
            <p>
                which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
            </p>
        </div>
        <div class="row">
            <?php
            // Example data (replace this with your dynamic data or database queries)
            $products = array(
                array("name" => "Off-the-Shoulder Lace-Up Back Wedding Dress", "price" => 999.00, "image" => "images\Set-4XLWG3861-10938818-Ivory_Champagne.webp"),
                array("name" => "Strapless Satin Wedding Dress with Slit", "price" => 899.00, "image" => "images\Set-4XLWG4017-11394169-White.webp"),
                array("name" => "illusion plunge v-neck lace wedding gown", "price" => 599.00, "image" => "images\CWG924_IVYCSHCOCO_OLEG_PROD6_075.webp"),
                array("name" => "Beaded Scroll and Lace Mermaid Wedding Dress", "price" => 999.00, "image" => "images\SWG835_IVORY_SIG_PROD9_021.webp"),
                array("name" => "Cummerbund Satin Ball Gown Wedding Dress", "price" => 799.00, "image" => "images\V3848_IVORY_DBSTU_PROD11_V2_083_front.webp"),
                array("name" => "Sheer lace and tulle ball gown wedding dress", "price" => 999.00, "image" => "images\WG3861_IVYBLACK_CORE_PROD2_096.webp"),

                 array("name" => "ruffled charmeuse v-neck long sleeve mini dress", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/SDWG1103_SOFTWHITE_DBSTU_PROD2_V2_017?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "crochet lace overlay midi dress", "price" => 899.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/SDWG0773_IVYNUDE_DBSTU_PROD10_046?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => " 3d floral lace applique crepe mini dress", "price" => 599.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/SDWG1132_SOFTWHITE_DBSTU_PROD2_003?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "crepe illusion waist sheath dress", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/AMN4272_BLACK_PROM_PROD10_0280?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "cutout one-shoulder crepe gown with skirt slit", "price" => 799.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/WBM2061_MBLACK_PRTY_PROD1_022?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "stretch satin one-shoulder ruched sheath dress ", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/APB4310_BLACK_PROM_PROD10_0356?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),

                array("name" => "Off-the-Shoulder Ruched Short Mesh Dress", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/MIDWG3979_IVORY_DBSTU_PROD9_175?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "off-the-shoulder appliqued a-line wedding dress", "price" => 899.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/WG4113_SFTWHT_DBSTU_PROD9_0067?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "floral applique long sleeve satin mini dress", "price" => 599.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/SDWG1095_SOFTWHITE_DBSTU_PROD5_034?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "long sleeve chiffon sweetheart mini a-line", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/2460BN_MWHITE_PARTY_PROD2_1174?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "straight neck stretch satin pleated short dress", "price" => 799.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/HVMP4310DB_MIVORY_JRPRTY_PROD2_235?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "charmeuse halter bridesmaid dress", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/Image-GS290122-11613859-SteelBlue?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),

                array("name" => "sequin sheath dress with 3d flowers", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/WBM3915V1_BAHAMA_PROM_PROD1_1430?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "charmeuse flutter-sleeve a-line bridesmaid dress", "price" => 899.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/GS290034_SAND_BM_PROD4_052?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "plunging satin tank sheath dress with slit", "price" => 599.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/A25610D_MTEAL_PROM_PROD10_1021?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "spaghetti strap ruched stretch jersey dress", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/WBM3023_CINNAMON_PARTY_PROD2_043?wid=1080&hei=1620&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "stretch satin cowl corset sheath dress", "price" => 799.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/WBM3674_LIPSTICK_PRTY_PROD10_854?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75"),
                array("name" => "ball gown silhouette slip", "price" => 999.00, "image" => "https://img.davidsbridal.com/is/image/DavidsBridalInc/BALLGOWNSLIP_WHITE_LING_OM_PROD10_0628_H?wid=640&hei=980&fit=constrain,1&resmode=sharp2&op_usm=2.5,0.3,4&fmt=webp&qlt=75")

               
                
            );

            // Loop through products and generate HTML
            foreach ($products as $product) {
                echo '<div class="col-sm-6 col-lg-4">
                        <div class="box">
                            <div class="img-box">
                                <a href="#">
                                    <img src="' . $product["image"] . '" alt="">
                                </a>
                            </div>
                            <div class="detail-box">
                                <span class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </span>
                                <a href="#">
                                    ' . $product["name"] . '
                                </a>
                                <div class="price_box">
                                    <h6 class="price_heading">
                                        <span>$</span> ' . number_format($product["price"], 2) . '
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>
  <br>

  <section class="info_section ">
    <div class="info_logo">
      <a class="navbar-brand" href="index.html">
        <span>
          FLOROM
        </span>
      </a>
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