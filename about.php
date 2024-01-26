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
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {}

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    a,
    a:active,
    a:focus {
        color: #6f6f6f;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 60px 0;
        /* min-height: 100vh;*/
    }

    .sec-title {
        position: relative;
        z-index: 1;
        margin-bottom: 60px;
        margin-top: 60px;
    }

    .sec-title .title {
        position: relative;
        display: block;
        font-size: 18px;
        line-height: 24px;
        color: #d1b3c4;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .sec-title h2 {
        position: relative;
        display: block;
        font-size: 40px;
        line-height: 1.28em;
        color: #222222;
        font-weight: 600;
        padding-bottom: 18px;
    }

    .sec-title h2:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 50px;
        height: 3px;
        background-color: #d1d2d6;
    }

    .sec-title .text {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
        margin-top: 35px;
    }

    .sec-title.light h2 {
        color: #ffffff;
    }

    .sec-title.text-center h2:before {
        left: 50%;
        margin-left: -25px;
    }

    .list-style-one {
        position: relative;
    }

    .list-style-one li {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #222222;
        font-weight: 400;
        padding-left: 35px;
        margin-bottom: 12px;
    }

    .list-style-one li:before {
        content: "\f058";
        position: absolute;
        left: 0;
        top: 0px;
        display: block;
        font-size: 18px;
        padding: 0px;
        color: #ff2222;
        font-weight: 600;
        -moz-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1.6;
        font-family: "Font Awesome 5 Free";
    }

    .list-style-one li a:hover {
        color: #d1b3c4;
    }

    .btn-style-one {
        position: relative;
        display: inline-block;
        font-size: 17px;
        line-height: 30px;
        color: #ffffff;
        padding: 10px 30px;
        font-weight: 600;
        overflow: hidden;
        letter-spacing: 0.02em;
        background-color: #E8C2CA;
        border: 0.16em solid #e8c2ca;
        border-radius: 2em;
        box-sizing: border-box;
    }

    .btn-style-one:hover {
        background-color: #d1b3c4;
        color: #ffffff;
    }

    .about-section {
        position: relative;
        padding: 120px 0 70px;
    }

    .about-section .sec-title {
        margin-bottom: 45px;
    }

    .about-section .content-column {
        position: relative;
        margin-bottom: 50px;
    }

    .about-section .content-column .inner-column {
        position: relative;
        padding-left: 30px;
    }

    .about-section .text {
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
    }

    .about-section .list-style-one {
        margin-bottom: 45px;
    }

    .about-section .btn-box {
        position: relative;
    }

    .about-section .btn-box a {
        padding: 15px 50px;
    }

    .about-section .image-column {
        position: relative;
    }

    .about-section .image-column .text-layer {
        position: absolute;
        right: -110px;
        top: 50%;
        font-size: 325px;
        line-height: 1em;
        color: #ffffff;
        margin-top: -175px;
        font-weight: 500;
    }

    .about-section .image-column .inner-column {
        position: relative;
        padding-left: 80px;
        padding-bottom: 0px;
    }

    .about-section .image-column .inner-column .author-desc {
        position: absolute;
        bottom: 16px;
        z-index: 1;
        background: #E8C2CA;
        padding: 10px 15px;
        left: 96px;
        width: calc(100% - 152px);
        border-radius: 50px;
    }

    .about-section .image-column .inner-column .author-desc h2 {
        font-size: 21px;
        letter-spacing: 1px;
        text-align: center;
        color: #fff;
        margin: 0;
    }

    .about-section .image-column .inner-column .author-desc span {
        font-size: 16px;
        letter-spacing: 6px;
        text-align: center;
        color: #fff;
        display: block;
        font-weight: 400;
    }

    .about-section .image-column .inner-column:before {
        content: '';
        position: absolute;
        width: calc(50% + 80px);
        height: calc(100% + 160px);
        top: -80px;
        left: -3px;
        background: transparent;
        z-index: 0;
        border: 44px solid #d1b3c4;
    }

    .about-section .image-column .image-1 {
        position: relative;
    }

    .about-section .image-column .image-2 {
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .about-section .image-column .image-2 img,
    .about-section .image-column .image-1 img {
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        border-radius: 46px;
    }

    .about-section .image-column .video-link {
        position: absolute;
        left: 70px;
        top: 170px;
    }

    .about-section .image-column .video-link .link {
        position: relative;
        display: block;
        font-size: 22px;
        color: #191e34;
        font-weight: 400;
        text-align: center;
        height: 100px;
        width: 100px;
        line-height: 100px;
        background-color: #ffffff;
        border-radius: 50%;
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .about-section .image-column .video-link .link:hover {
        background-color: #191e34;
    }
</style>

<body>
    <!-- navbar -->
    <?php include("./lib/ForAbout.php") ?>


    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About FLOROM</span>
                            <h2>We are Creative Tech Enthusiast working since 2015</h2>
                        </div>
                        <div class="text">Online shopping can be a minefield, especially when it comes to special occasion dresses. Our customer service team is staffed by real people who believe in our company and our mission. We never respond to questions with canned messages and we do everything we can to make sure you’re satisfied with your purchase.</div>
                        <div class="text">
                            Every woman is beautiful in her own way. Afarose offers dresses in sizes 2-28 and additional customization is available upon request. The custom sizing includes alterations to the bust, waist, hip, and length. For more information, please see our size chart for details.
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="author-desc">
                            <h2>Salma</h2>
                            <span>FLOROM Fondeur</span>
                        </div>
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img title="Rahul Kumar Yadav" src="image/pexels-kerem-kslr-13200091.jpg" alt=""></a></figure>

                    </div>
                </div>

            </div>
            <div class="sec-title">
                <span class="title">Designer Wedding Collection</span>
                <h2>WE CUSTOM DESIGN, YOU SPARKLE AND SHINE</h2>
            </div>
            <div class="text">
                We’ve raised the bar for what it means to be “custom made.” Each dress is tailored to 14 key measurements to give you the best possible fit. Did you know most brands only take 3 measurements? That’s a recipe for disaster! At Afarose, we want your customized gown to fit like a glove because we know this dress is THE DRESS and we’re honored to be a part of your big day.

                Our exclusive wedding gowns are crafted from layers of premium tulle, chiffon, satin and/or hand-pieced lace. Luxurious embellishments—rhinestones, crystals, sequins and beading—are sourced from Japan. The end result is a gorgeous gown made with extreme attention to detail: a one-of-a-kind wedding dress that reflects your unique beauty.

                We strongly recommend checking out our “Try At Home” program—where we’ll send you a sample dress (or more, if you’re interested…)—as well as our “Virtual Appointment” service for a one-on-one video conferencing styling session.
            </div>

        </div>
    </section>


    <!-- our team -->
    <section>
        <div class="row">
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

    <!-- footer -->
    <?php include("lib/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>