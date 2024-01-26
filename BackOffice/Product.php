<?php 

@include 'C:\xampp\htdocs\FLOROM\lib\connection.php';

    $search = '';
    if (isset($_GET) && $_GET && $_GET['search']){
        $search = $_GET['search'];
        $sql = "SELECT * FROM `dashboard` WHERE `name` LIKE '%" . $_GET['search'] . "%' or `price` LIKE '%" . $_GET['search'] . "%';";
    }else {
        $sql = "SELECT * FROM `dashboard`";
    }

      $result = $conn->query($sql);
      $conn->close();
?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="Dashbo.css">

<head>
<style>


header {
display: flex;
align-items: center;
justify-content: space-between;
background-color: #B6BBC4;
}


nav ul li {
display: inline;
margin-right: 30px;
}

nav ul li a {
text-decoration: none;
color: black;
}

label{
text-align: right;
}

li {
display: flex; /* Use flexbox to align the images */
}
#Formm{
border-style:solid ;
}

hr.center-ball {
  background: grey;
}

img {
  width: 500px;
  height: 500px;
  border: 1px solid #000;
}


hr {
  color: #999; 
    height: 2px; 
    margin: 20px 0; 
  
  display: block;
  unicode-bidi: isolate;
  margin-block-start: 01.5em;
  margin-block-end: 0.5em;
  margin-inline-start: auto;
  margin-inline-end: auto;
  overflow: hidden;
  border-style: inset;
  border-width: 1 px;
   }
</style>

</head>


<body>
  <header>
    <br>
    <center>
    <form>
        <label for="search">Search</label>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>
    </center>
    
</header>
    <br><br><br>
    <center>
      
        <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
                    <li>
                        <h2><?= $row["name"] ?></h2>
                        <p><?= $row["price"] ?></p>
                        <img src="./uploaded_img/<?= $row["image"] ?>" alt="test">

                    </li>
                <?php }
            } else {
                echo "0 results";
            }
        ?>
    </center>
    <br>
  <center>
  <hr class="center-ball">
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved
    </p>
  </section>
  </center>
</body>
</html>