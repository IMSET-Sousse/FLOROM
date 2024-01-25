<?php
include_once("lib\connection.php");

$search = '';
$categoryFilter = '';
$priceFilter = '';

// Check if search parameter is provided
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
    $searchCondition = "(`product_name` LIKE '%" . $search . "%' or `category` LIKE '%" . $search . "%' or `price` LIKE '%" . $search . "%')";
} else {
    $searchCondition = '1'; // Default condition if no search parameter
}

// Check if category filter is provided
if (isset($_GET['category'])) {
    $categoryFilter = $_GET['category'];
    $categoryCondition = "`category` = '" . $categoryFilter . "'";
} else {
    $categoryCondition = '1'; // Default condition if no category filter
}

// Check if price filter is provided
if (isset($_GET['price'])) {
    $priceFilter = $_GET['price'];
    // Assuming price filter is a range, you may need to modify this condition based on your requirements
    $priceCondition = "`price` BETWEEN " . $priceFilter;
} else {
    $priceCondition = '1'; // Default condition if no price filter
}

// Construct the SQL query with the filter conditions
$sql = "SELECT * FROM `filter` WHERE " . $searchCondition . " AND " . $categoryCondition . " AND " . $priceCondition;

$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="product.css" />
	<!-- bootstrap-links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<!-- fontawsom link -->
	<script src="https://kit.fontawesome.com/1ed826f313.js" crossorigin="anonymous"></script>
</head>


<body>
<?php include("./lib/nav.php") ?>

<!-- search bar section -->

<form action="product.php" method="get" class="boxcontainer">
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



	<div class="overlay" style="display:none"></div>
	<div class="search-section">
		<div class="container-fluid container-xl">
			<div class="row main-content ml-md-0">
				<!-- filter section	 -->
				<div class="sidebar col-md-3 px-0">
					<h1 class="border-bottom filter-header d-flex d-md-none p-3 mb-0 align-items-center">
						<span class="mr-2 filter-close-btn">
							X
						</span>
						Filters
						<span class="ml-auto text-uppercase">Reset Filters</span>
					</h1>
					<div class="sidebar__inner ">
						<div class="filter-body">
							<div>
								<h2 class="border-bottom filter-title">Type</h2>
								<div class="mb-30 filter-options">
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Indoor">
										<label class="custom-control-label" for="Indoor">Toxidos</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Outdoor">
										<label class="custom-control-label" for="Outdoor">Dresse</label>
									</div>
								</div>
								<form action="product.php" method="get">
								<h2 class="font-xbold body-font border-bottom filter-title">Categories</h2>
								<div class="mb-3 filter-options" id="cusine-options">
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="LongDress" name="category" value="Long Dress" <?php echo ($categoryFilter == 'Long Dress') ?  : ''; ?>>
										<label class="custom-control-label" for="Chinese">Long Dress</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="ShortDress" name="category" value="Short Dress" <?php echo ($categoryFilter == 'Short Dress') ?  : ''; ?>>
										<label class="custom-control-label" for="Italian">Short Dress</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="OffTheShoulder" name="category" value="Off The Shoulder" <?php echo ($categoryFilter == 'Off The Shoulder') ?  : ''; ?>>
										<label class="custom-control-label" for="Mexican">Off The Shoulder</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="BallGown" name="category" value="Ball Gown" <?php echo ($categoryFilter == 'Ball Gown') ?  : ''; ?>>
										<label class="custom-control-label" for="Thai">Ball Gown</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="A-Line" name="category" value="A-Line" <?php echo ($categoryFilter == 'A-Line') ?  : ''; ?>>
										<label class="custom-control-label" for="Gujarati">A-Line</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Mermaide" name="category" value="Mermaide" <?php echo ($categoryFilter == 'Mermaide') ?  : ''; ?>>
										<label class="custom-control-label" for="Panjabi">Mermaide</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="FitAndFlaire" name="category" value="Fit And Flaire" <?php echo ($categoryFilter == 'Fit And Flaire') ? : ''; ?>>
										<label class="custom-control-label" for="South-Indian">Fit And Flaire</label>
									</div>
								</div>
								<button type="submit" class="btn" id=btn>Apply Filters</button>
    </form>
					
								<h2 class="font-xbold body-font border-bottom filter-title">Price Range</h2>
								<div class="mb-3 theme-clr xs2-font d-flex justify-content-between">
									<span id="slider-range-value1">$1000</span>
									<span id="slider-range-value2">$10,000</span>
								</div>
								<div class="mb-30 filter-options">
									<div>
										<div id="slider-range">
											<form>
												<div class="form-group">
													<input type="range" class="form-control-range" id="">
												</div>
											</form>
										</div>
									</div>
								</div>
								<h2 class="border-bottom filter-title">Toxidos</h2>
								<div class="mb-3 filter-options" id="services-options">
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Breakfast">
										<label class="custom-control-label" for="Breakfast">Burgundy</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Lunch">
										<label class="custom-control-label" for="Lunch">Peak Lapel</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Donner">
										<label class="custom-control-label" for="Donner">Notch Lapel</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Cafe">
										<label class="custom-control-label" for="Cafe">Cummerbund</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="Brunch">
										<label class="custom-control-label" for="Brunch">Slim Fit Suits</label>
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" id="other">
										<label class="custom-control-label" for="other">Black Suits</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content col-md-9">
					<div class="d-flex justify-content-between border-bottom align-items-center">
						<h2 class="title">Products</h2>
						<div class="filters-actions">
							<div>
								<button class="btn filter-btn d-md-none"><svg xmlns="http://www.w3.org/2000/svg" class="mr-2" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M3 18h6v-2H3v2zM3 6v2h18V6H3zm0 7h12v-2H3v2z" />
									</svg>
									Filter</button>
							</div>
							<div class="d-flex align-items-center">

								<div class="dropdown position-relative sort-drop">
									<button type="button" class="btn btn-transparent dropdown-toggle body-clr p-0 py-1 sm-font fw-400 sort-toggle" data-toggle="dropdown">
										<span class="mr-2 d-md-none">
											<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
												<g>
													<path d="M0,0h24 M24,24H0" fill="none" />
													<path d="M7,6h10l-5.01,6.3L7,6z M4.25,5.61C6.27,8.2,10,13,10,13v6c0,0.55,0.45,1,1,1h2c0.55,0,1-0.45,1-1v-6 c0,0,3.72-4.8,5.74-7.39C20.25,4.95,19.78,4,18.95,4H5.04C4.21,4,3.74,4.95,4.25,5.61z" />
													<path d="M0,0h24v24H0V0z" fill="none" />
												</g>
											</svg>
										</span>
										<span class="d-md-inline-block ml-md-2 font-semibold">Newest First</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right p-0 no-caret">
										<a class="dropdown-item selected" href="#">Newest First</a>
										<a class="dropdown-item" href="#">Lowest First</a>
										<a class="dropdown-item" href="#">Highest First</a>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- product section -->
					<div class="row row-grid">
					<?php
        // Check if there are search results
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
						<div class="col-md-6 col-lg-4 col-xl-4">
							<img src="<?php echo $row['image_url']; ?>" />
							<h6> <?php echo $row['category']; ?></h6>
							<h6 class="price_heading">
								<span>$</span> <?php echo $row['price']; ?>
							</h6>
						</div>
						
						<?php
          }
        } else {
          echo "<p>No results found.</p>";
        }
        ?>

					</div>
				</div>
			</div>
		</div>
	</div>

<!-- footer -->
<?php include("lib/footer.php") ?>
	<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
</body>

</html>