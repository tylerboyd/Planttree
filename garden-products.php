<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
	switch ($_GET["action"]) {
		case "add":
			if (!empty($_POST["quantity"])) {
				$productByCode = $db_handle->runQuery("SELECT * FROM gardenproducts WHERE Code='" . $_GET["Code"] . "'");
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

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

			<!-- Banner starts -->
			<?php include("banner.php"); ?>
			<!-- Banner ends -->

			<!-- Navbar starts -->
			<?php include("nav.php"); ?>
			<!-- Navbar ends -->

		</header>
		<!--/Header-->

		<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-2 border">

				<h3 class="mt-2">Filters</h3>
				<form action="filterproducts.php" method="POST">
				<div class="dropdown mb-3">
					<button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Select Categories
					</button>
					<div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
						<!-- Can probably put a loop here for categories -->
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="category" value='Maintenance Tools' checked="checked">
							<label class="form-check-label" for="exampleCheck1">Maintenance Tools</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="category" value='Digging Tools'>
							<label class="form-check-label" for="exampleCheck1">Digging Tools</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="category" value='Cutting Tools'>
							<label class="form-check-label" for="exampleCheck1">Cutting Tools</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="category" value='Garden Transport'>
							<label class="form-check-label" for="exampleCheck1">Garden Transport</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="category" value='Lawn Care'>
							<label class="form-check-label" for="exampleCheck1">Lawn Care</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="category" value='Apparel'>
							<label class="form-check-label" for="exampleCheck1">Apparel</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="category" value='Fertiliser'>
							<label class="form-check-label" for="exampleCheck1">Fertiliser</label>
						</div>
					</div>
				</div>

				<div class="dropdown mt-3 mb-2">
					<button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Select Brand
					</button>
					<div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
						<!-- Can probably put a loop here for Brands -->
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Stanley' checked="checked">
							<label class="form-check-label" for="exampleCheck1">Stanley</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Atlas Trade'>
							<label class="form-check-label" for="exampleCheck1">Atlas Trade</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Spear and Jackson'>
							<label class="form-check-label" for="exampleCheck1">Spear and Jackson</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Saxon'>
							<label class="form-check-label" for="exampleCheck1">Saxon</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Bacho'>
							<label class="form-check-label" for="exampleCheck1">Bacho</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Fiskars'>
							<label class="form-check-label" for="exampleCheck1">Fiskars</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Hart'>
							<label class="form-check-label" for="exampleCheck1">Hart</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='NZ Wheelbarrows'>
							<label class="form-check-label" for="exampleCheck1">NZ Wheelbarrows</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Troopers'>
							<label class="form-check-label" for="exampleCheck1">Troopers</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Daltons'>
							<label class="form-check-label" for="exampleCheck1">Daltons</label>
						</div>
						<div class="dropdown-item">
							<input type="radio" class="form-check-input" name="brand" value='Garden Galore'>
							<label class="form-check-label" for="exampleCheck1">Garden Galore</label>
						</div>
					</div>
				</div>

				<h4 class="mt-2">Price</h4>
				<div class="row">
					<div class="col-sm">
						<input type="text" class="product-price-low form-control mb-2 price-products-form" Name="price-low" maxlength="3" size="3" value="0" pattern = "[0-9]+" />
					</div>
					<div class="col-sm-2">
						<p class="text-center mt-1"> to </p>
					</div>
					<div class="col-sm">
						<input type="text" class="product-price-high form-control mb-2 price-products-form" Name="price-high" maxlength="3" size="3" value="200" pattern = "[0-9]+"/>
					</div>
				</div>

				<input type="submit" value="Apply Filter" class="btnAddAction mt-3 mb-3 btn btn-primary btn-block" />
			</div>
	</form>
			<div class="col">

				<?php
				$product_array = $db_handle->runQuery("SELECT * FROM gardenproducts ORDER BY ProductID ASC");
				if (!empty($product_array)) {
					foreach ($product_array as $key => $value) {
						?>

						<div class="row-4 mt-3 border bg-light text-center">

							<form method="post" action="garden-products.php?action=add&Code=<?php echo $product_array[$key]["Code"]; ?>">

								<div class="row">

									<div class="col-lg-3 mt-1 ml-1 mr-1 mb-1">
										<img class="img-thumbnail products-thumb" src="images/<?php echo $product_array[$key]["Image"]; ?> " />
									</div>

									<div class="col-lg mt-2 text-left scale-text-center">
										<h3>
											<form action="garden-products.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>">
												<input type="hidden" name="hidden_code" value=<?php echo $product_array[$key]["Code"]; ?> />
												<a class="product-title" href="garden-item.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>"><?php echo $product_array[$key]["Name"]; ?></a>
											</form>
										</h3>
									</div>

									<div class="col-lg text-right mr-3 scale-price-center">
										<h3>
											<div class="product-Price"><?php echo "$" . $product_array[$key]["Price"]; ?><br></div>
										</h3>
										<div class="cart-action form-inline justify-content-center mt-3 scale-float-center">
											<input type="text" class="product-quantity form-control mr-1 ml-1 mt-2 prod-qty-maxwidth btn-lg" Name="quantity" maxlength="2" size="2" value="1" pattern="[0-99]" />
											<input type="submit" value="Add to Cart" class="btnAddAction btn btn-lg btn-primary mr-1 ml-1 mt-2" />
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

		<!-- Footer starts here -->
		<?php
		include("footer.php");
		?>
		<div class="mt-5">
			<!-- padding -->
		</div>
		<!-- Footer ends -->

	</Body>

	</HTML>
