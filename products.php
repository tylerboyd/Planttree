<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
	switch ($_GET["action"]) {
		case "add":
			if (!empty($_POST["quantity"])) {
				$productByCode = $db_handle->runQuery("SELECT * FROM tree WHERE Code='" . $_GET["Code"] . "'");
				$itemArray = array($productByCode[0]["Code"] => array('Name' => $productByCode[0]["Name"], 'Code' => $productByCode[0]["Code"], 'quantity' => $_POST["quantity"], 'Price' => $productByCode[0]["Price"], 'Image' => $productByCode[0]["Image"]));

				if (!empty($_SESSION["cart_item"])) {
					if (in_array($productByCode[0]["Code"], array_keys($_SESSION["cart_item"]))) {
						foreach ($_SESSION["cart_item"] as $k => $v) {
							if ($productByCode[0]["Code"] == $k) {
								if (empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
					}
				} else {
					$_SESSION["cart_item"] = $itemArray;
				}
			}
			break;
		case "remove":
			if (!empty($_SESSION["cart_item"])) {
				foreach ($_SESSION["cart_item"] as $k => $v) {
					if ($_GET["Code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if (empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
				}
			}
			break;
		case "empty":
			unset($_SESSION["cart_item"]);
			break;
	}
}
?>
	<HTML>

	<Head>
		<title>Plant a Tree </title>

		<!--Bootstrap CDN-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!--font awesome cdn-->
		<script src="https://kit.fontawesome.com/a7d4a476f6.js" crossorigin="anonymous"></script>

		<!--Slick Slider-->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
		<!-- Custom Stylesheet-->
		<link rel="stylesheet" href="styles/custom-styles.css">

	</Head>

	<Body>
		<!--Header-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-12"></div>
					<div class="col-md-4 col-sm-12 col-12 text-center">
						<img src="Assets/Logos/PlantATree.png" alt="Plant a Tree" style="width:100px;height:100px">
					</div>
				</div>
			</div>

			<!--Nav Bar (Apply to other pages-->
			<div class="container-fluid p-0">

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.php">Trees</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.php">Related Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.php">Contact Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.php">Locations</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.php">Help</a>
							</li>
						</ul>
						<form action="searchshop.php" method="GET" class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search for a product" aria-label="Search for a product" name="search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
						<div class="cart form-inline my-2 my-lg-0 text-right p-3">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a href="cart.php"><i class="fas fa-shopping-cart fa-2x"></i> <span class="sr-only">(current)</span></a>
								</li>

							</ul>
						</div>
					</div>

				</nav>
			</div>
		</header>
		<!--/Header-->

		<div class="row justify-content-md-center mt-3 ml-3 mr-3">
			<div class="col-lg-3 border">
				<h3 class="mt-2">Filters</h3>
				<h4 class="mt-2">Categories</h4>

				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Select Categories
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<!-- Can probably put a loop here for categories -->
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
					</div>
				</div>

				<h4 class="mt-2">Price</h4>
				<div class="row">
					<div class="col-sm">
						<input type="text" class="product-price-low form-control mb-2 price-products-form" Name="price-low" maxlength="3" size="3" value="Any" />
					</div>
					<div class="col-sm-2">
						<p class="text-center mt-1"> to </p>
					</div>
					<div class="col-sm">
						<input type="text" class="product-price-high form-control mb-2 price-products-form" Name="price-high" maxlength="3" size="3" value="Any" />
					</div>
				</div>

				<h4 class="mt-2">Soil Drainage</h4>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Soil Drainage
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<!-- Can probably put a loop here for categories -->
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
					</div>
				</div>
				<h4 class="mt-2">Sun Requirement</h4>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Sun Requirement
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<!-- Can probably put a loop here for categories -->
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
					</div>
				</div>
				<h4 class="mt-2">Maintenance</h4>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Maintenance
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<!-- Can probably put a loop here for categories -->
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
					</div>
				</div>

				<h4 class="mt-2">Max Height</h4>
				<div class="row">
					<div class="col-sm">
						<input type="text" class="product-height-low form-control mb-2 price-products-form" Name="height-low" maxlength="3" size="3" value="Any" />
					</div>
					<div class="col-sm-2">
						<p class="text-center mt-1"> to </p>
					</div>
					<div class="col-sm">
						<input type="text" class="product-height-high form-control mb-2 price-products-form" Name="height-high" maxlength="3" size="3" value="Any" />
					</div>
				</div>

				<h4 class="mt-2">Growth Rate</h4>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Growth Rate
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<!-- Can probably put a loop here for categories -->
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
						<div class="dropdown-item">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">option</label>
						</div>
					</div>
				</div>
				<input type="submit" value="Apply Filter" class="btnAddAction mt-3 btn btn-primary" />
			</div>



			<div class="col-lg ">

				<?php
				$product_array = $db_handle->runQuery("SELECT * FROM tree ORDER BY ID ASC");
				if (!empty($product_array)) {
					foreach ($product_array as $key => $value) {
						?>

						<div class="row-4 mt-3 border bg-light text-center">

							<form method="post" action="products.php?action=add&Code=<?php echo $product_array[$key]["Code"]; ?>">

								<div class="row">

									<div class="col-md-3 mt-1 ml-1 mr-1 mb-1">
										<img class="img-thumbnail products-thumb" src="images/<?php echo $product_array[$key]["Image"]; ?> " />
									</div>

									<div class="col mt-2 text-left">
										<h3>
											<form action="products.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>">
												<input type="hidden" name="hidden_code" value=<?php echo $product_array[$key]["Code"]; ?> />
												<a class="product-title" href="item.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>"><?php echo $product_array[$key]["Name"]; ?></a>
											</form>
										</h3>
									</div>

									<div class="col text-right mr-3">
										<h3>
											<div class="product-Price"><?php echo "$" . $product_array[$key]["Price"]; ?></div>
										</h3>
										<div class="cart-action float-right">
											<input type="text" class="product-quantity form-control mb-2" Name="quantity" maxlength="2" size="2" value="1" pattern="[0-99]" />
											<input type="submit" value="Add to Cart" class="btnAddAction btn btn-lg btn-primary" />
										</div>
									</div>

								</div>

							</form>

						</div>

				<?php

					}
				}
				?>


			</div>
		</div>


	</Body>

	</HTML>