
    <?php
    @include 'C:\xampp\htdocs\FLOROM\lib\connection.php';
    // Query to retrieve contact information from the database
        $sql = "SELECT * FROM categorie";
        $result = $conn->query($sql);
        
        
        if(!$result){
             die(mysqli_error());
             exit();
        }
?>











<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
.message{
display: block;
padding:1.1rem;
color:white;
text-align: center;
}


.container{
   max-width: 1200px;
   padding:2rem;
   margin:0 auto;
}






.product-display{
   margin:2rem 0;
}

.product-display .product-display-table{
   width: 100%;
   text-align: center;
}







</style>
<body>

    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">FLOROM</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elements
                    </li>
                    <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#Dashboard" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Dashboard
                        </a>
                        <ul id="Dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                        <li class="sidebar-item">
                                <a href="ProductDash.php" class="sidebar-link">Product</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="CategoryDash.php" class="sidebar-link">Categorie</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="userDash.php" class="sidebar-link">User</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="ContactDash.php" class="sidebar-link">Contact</a>
                            </li>
                    </li>
</ul>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Product
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                            <a href="add.php" class="sidebar-link">Add Product</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="edit.php" class="sidebar-link">Modify Product</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="delete.php" class="sidebar-link">Delete Product</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                            Categorie
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="CatAdd.php" class="sidebar-link">Add</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Modify</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Delete</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
                            Auth
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Register</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        Multi Level Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
                            Multi Dropdown
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"
                                    data-bs-toggle="collapse" aria-expanded="false">Type</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Type 1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Type 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/face-happy-girl-avatar-laughing-260nw-1459862774.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Admin Dashboard</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/organic-flat-customer-support-illustration_23-2148899134.avif" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                $ 78.00
                                            </h4>
                                            <p class="mb-2">
                                                Total Earnings
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +9.0%
                                                </span>
                                                <span class="text-muted">
                                                    Since Last Month
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Product Information
                            </h5>
                           

   
<div class="container">

<div class="row ">
                    <div class="col-sm-10">
                        <p class="text-center">
                            <strong>Add categories</strong>
                        </p>
                      
                        <p class="text-center pt-3">
                        </p>
                        <form class="form-control mx-auto w-50" action="" method="post">
                            <label class="pt-2 pb-4 text-center" for="categories">Choose a categorie</label>
                            <select class="form-control" id="categories" name="categories">
                                <option value="">------</option>
                            <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                                     <option value="<?php echo $row['id'];?>"><?php echo ($row['title']); ?></option>
                             <?php } ?>
                             </select>
                             <br>
                            <label class="pt-1 pb-4 text-center">Enter a sub category</label>
                            <input class="form-control" type="text" id="subcategory" placeholder="Enter a sub category">
                            <br>
                            <input type="button" class=" btnnn " onclick="addsubcategory()" value="Add a Sub category">
                            <div class="error1 pt-2"></div><div class="success1 pt-2"></div>
                        </form>
                    </div>
                    
                    <div class="error2"></div><div class="success2"></div>
                    <script>
                        
                        function addcategory(){
                            var x = $('#category').val();
                            var input = {
                                "category" : x,
                                "action" : 'addcategory'
                            };
                            $.ajax({
                                url : 'controller.php',
                                type : 'POST',
                                dataType : "json",
                                data : input,
                                success : function(response)
                                {
                                    $('.success').html(response.message).show();
                                    $('.error').hide();
                                },
                                error : function(response)
                                {
                                     $('.error').html("Sub category already exist.").show();
                                     $('.success').hide();
                                }
                            });
                            
                        }
                        function addsubcategory(){
                            var x = $('#subcategory').val();
                            var id = $('#categories').val();
                            var input = {
                                "subcategory" : x,
                                "id" : id,
                                "action" : 'addsubcategory'
                            };
                            $.ajax({
                                url : 'controller.php',
                                type : 'POST',
                                dataType : "json",
                                data : input,
                                success : function(response)
                                {
                                    $('.success1').html(response.message).show();
                                    $('.error1').hide();
                                },
                                error : function(response)
                                {
                                     $('.error1').html("Sub category already exist.").show();
                                     $('.success1').hide();
                                }
                            });
                            
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
                            <h6 class="card-subtitle text-muted">
                            This is The Product Dashboard.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                            
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>FLOROM</strong>
                                </a>
                            </p>
                        </div>
                   
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>












        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</body>
</html>