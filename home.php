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
    <style>
        .message {
            font-size: 22px;
            font-weight: bold;
            color: grey;
            text-transform: capitalize;
            text-align: center;
            
        }
    </style>
  </head>
  <body>
  <!--navbar start-->
  
  <?php include("./lib/nav.php") ?>
  
    <?php 
        if ($logedin == TRUE) {
            echo "<p class='message'>Hello, " . $_SESSION["name"] . "</p>";
        }
    ?>

  <!--navbar end-->
    <!-- carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="image/pexels-kyle-roxas-2122361.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1>First slide label</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="image/pexels-sergio-souza-1779491.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1>Second slide label</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="image/pexels-pixabay-208215.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1>Third slide label</h1>
          </div>
        </div>
      </div>
    </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      <!-- wrapper -->
      <div class="quot">
        <h1>Love Brought You Here. Us Too.</h1>
        <p>
          Nothing matters more to us than connection. Allure Bridals strives to
          provide everyone — from the engaged to members of the wedding party —
          gorgeous wedding wear for every look and budget. We have something for
          everyone: iconic Mikado ballgowns, luxurious velvet tuxedos, sleek
          minimalist crepe and whispers of chiffon. Designed from the heart, to
          make your wedding utterly unforgettable
        </p>
      </div>

      <div class="wrapper">
        <div class="photobanner">
        <img class="first" src="image/pexels-asdrubal-luna-12030826.jpg" alt="" />
        <img src="image/pexels-kyle-roxas-2122350.jpg" alt="" />
        <img src="image/pexels-david-guerrero-10123118.jpg" alt="" />
        <img src="image/pexels-pixabay-157997.jpg" alt="" />
        <img src="image/pexels-ömer-çelik-17542176.jpg" alt="" />
        <img src="image/pexels-john-ray-ebora-3863802.jpg" alt="" />
        <img src="image/pexels-ali-salah-photographie-16903589.jpg" alt="" />
        <img src="image/pexels-transtudios-photography-&-video-3684519.jpg" alt="" />
        <img src="image/pexels-asdrubal-luna-12030866.jpg" alt="" />
        <img src="image/pexels-irina-iriser-876439.jpg" alt="" />
      </div>
      </div>


      <div class="bride">
        <div class="left">
             <h2>YOUR DREAM WEDDING DRESS FOR LESS, NO MATTER THE SIZE</h2>
                 <p>One of the best things about choosing an Avery Austin designer wedding gown or bridesmaid dress is the affordability of these gorgeous styles. Not only do you get to avoid the salon markup fees traditionally applied to bridal gowns, but you’re also paying the same price for your chosen style no matter your size. We believe that sizing should be inclusive for all women, so if you’re shopping for plus-size wedding dresses or plus-size bridesmaid dresses, you and your wedding party won’t be charged more.</p>
                    <a href="#" class="bn3">See More</a>
        </div>
        <div class="right">
           <img src="image/pexels-bach-hanzo-3546714.jpg" alt=""/>
        </div>
      </div>



      
      <div class="groom" id="groom">
        <div class="g-left">
          <img src="image/pexels-ömer-çelik-17542178.jpg">
        </div>
        <div class="g-right">
          <h2>Groom</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ut earum dolorum soluta placeat, nostrum modi aspernatur culpa ad voluptatibus quibusdam laboriosam sed saepe aperiam blanditiis dignissimos libero ducimus numquam.</p>
          <a href="#" class="bn3">See More</a>
        </div>
      </div>


      <!-- our team -->
      <section>
      <div class="row">
        <h1>Our Disigners</h1>
      </div>
      <div class="row">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="image/profile-img-3.png" />
            </div>
            <h3>Luna Turner</h3>
            <p>Bridel Designer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="image/profile-img-2.png" />
            </div>
            <h3>Bryant Hall</h3>
            <p>Toxidos Designer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="image/profile-img-1.png" />
            </div>
            <h3>Hope Watkins</h3>
            <p>Designer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
      

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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
