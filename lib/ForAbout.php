<?php
$logedin = FALSE;
if (isset($_SESSION['id'])) {
    $logedin = TRUE;
} else {
    $logedin = FALSE;
}
?>
<!-- top-bar -->
<div class="top-bar">
    <a class="bar-brand" href="home.php"><img src="image/logo.png" id="logo" /></a>

</div>
<!-- navbar -->
<div class="border-bottom border-top sticky-top" id="subNavContainer">
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars me-2"></i> Menu
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="Product.php">DRESS</a>
                    
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="Tuxedos.php">TUXEDOS</a>
                    
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ACCESORIS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">All</a></li>
                            <li><a class="dropdown-item" href="#">Veils</a></li>
                            <li><a class="dropdown-item" href="#">Headpieces</a></li>
                            <li><a class="dropdown-item" href="#">Earrings</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Capes+Overskirts</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Ties</a></li>
                            <li><a class="dropdown-item" href="#">Bowties</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="about.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="contact.php">CONTACT US</a>
                    </li>

                    <a href="#"> <i class="fa-regular fa-heart fa-xl" id="fa1" style="color: #d1b3c4;"></i></a>
                    <?php if ($logedin == TRUE) { ?>
                    <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket fa-xl" id="fa2" style="color: #d1b3c4;"></i></a> <?php } else { ?>
    <a href="login.php"> <i class="fa-regular fa-user fa-xl" id="fa2" style="color: #d1b3c4;"></i></a>
   <a href="signup.php"> <i class="fa-solid fa-user-plus fa-xl" id="fa3" style="color: #d1b3c4;"></i></a>
    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>