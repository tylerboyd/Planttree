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
				<!-- <h4 class="mt-2">Categories</h4> -->
				<form action="filtershop.php" method="POST">
	      <div class="dropdown">
	        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Select Categories
	        </button>
	        <div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
	          <!-- Can probably put a loop here for categories -->
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="category" value='Fruit Tree'>
	            <label class="form-check-label" for="exampleCheck1">Fruit Trees</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="category" value='Hedge'>
	            <label class="form-check-label" for="exampleCheck1">Hedges</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="category" value='Evergreen'>
	            <label class="form-check-label" for="exampleCheck1">Evergreen Trees</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="category" value='NZ Native'>
	            <label class="form-check-label" for="exampleCheck1">NZ Native</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="category" value='Gum Tree'>
	            <label class="form-check-label" for="exampleCheck1">Gum Trees</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="category" value='Palm Tree'>
	            <label class="form-check-label" for="exampleCheck1">Palm Trees</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="category" value='NULL' checked="checked">
	            <label class="form-check-label" for="exampleCheck1">None</label>
	          </div>
	        </div>
	      </div>

	      <h4 class="mt-2">Price</h4>
	      <div class="row">
	        <div class="col-sm">
	          <input type="text" class="product-price-low form-control mb-2 price-products-form" name="price-low" maxlength="3" size="3" value="0" pattern = "[0-9]+"/>
	        </div>
	        <div class="col-sm-2">
	          <p class="text-center mt-1"> to </p>
	        </div>
	        <div class="col-sm">
	          <input type="text" class="product-price-high form-control mb-2 price-products-form" name="price-high" maxlength="3" size="3" value="150" pattern = "[0-9]+"/>
	        </div>
	      </div>

	      <!-- <h4 class="mt-2">Soil Drainage</h4> -->
	      <div class="dropdown mt-2 mb-3">
	        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Soil Drainage
	        </button>
	        <div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
	          <!-- Can probably put a loop here for categories -->
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="drainage" value = 'Fast'>
	            <label class="form-check-label" for="exampleCheck1">Fast</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="drainage" value = 'Medium'>
	            <label class="form-check-label" for="exampleCheck1">Medium</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="drainage" value = 'Slow'>
	            <label class="form-check-label" for="exampleCheck1">Slow</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="drainage" value='NULL' checked="checked">
	            <label class="form-check-label" for="exampleCheck1">None</label>
	          </div>
	        </div>
	      </div>
	      <!-- <h4 class="mt-2">Sun Requirement</h4> -->
	      <div class="dropdown mt-3 mb-3">
	        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Sun Requirement
	        </button>
	        <div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
	          <!-- Can probably put a loop here for categories -->
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="sun" value = 'Full Sun'>
	            <label class="form-check-label" for="exampleCheck1">Sunny</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="sun" value = 'Medium Sun'>
	            <label class="form-check-label" for="exampleCheck1">Medium</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="sun" value = 'Shade'>
	            <label class="form-check-label" for="exampleCheck1">Shade</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="sun" value='NULL' checked="checked">
	            <label class="form-check-label" for="exampleCheck1">None</label>
	          </div>
	        </div>
	      </div>
	      <!-- <h4 class="mt-2">Maintenance</h4> -->
	      <div class="dropdown mt-3 mb-2">
	        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Maintenance
	        </button>
	        <div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
	          <!-- Can probably put a loop here for categories -->
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="maintenance" value = 'High'>
	            <label class="form-check-label" for="exampleCheck1">High</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="maintenance" value = 'Medium'>
	            <label class="form-check-label" for="exampleCheck1">Medium</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="maintenance" value = 'Low'>
	            <label class="form-check-label" for="exampleCheck1">Low</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="maintenance" value='NULL' checked="checked">
	            <label class="form-check-label" for="exampleCheck1">None</label>
	          </div>
	        </div>
	      </div>

	      <h4 class="mt-2">Max Height</h4>
	      <div class="row">
	        <div class="col-sm">
	          <input type="text" class="product-height-low form-control mb-2 price-products-form" Name="height-low" maxlength="3" size="3" value="0" pattern = "[0-9]+"/>
	        </div>
	        <div class="col-sm-2">
	          <p class="text-center mt-1"> to </p>
	        </div>
	        <div class="col-sm">
	          <input type="text" class="product-height-high form-control mb-2 price-products-form" Name="height-high" maxlength="3" size="3" value="150" pattern = "[0-9]+"/>
	        </div>
	      </div>

	      <!-- <h4 class="mt-2">Growth Rate</h4> -->
	      <div class="dropdown mt-2 mb-2">
	        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Growth Rate
	        </button>
	        <div class="dropdown-menu btn-block" aria-labelledby="dropdownMenuButton">
	          <!-- Can probably put a loop here for categories -->
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="growth" value='Fast'>
	            <label class="form-check-label" for="exampleCheck1">Fast</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="growth" value='Medium'>
	            <label class="form-check-label" for="exampleCheck1">Medium</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="growth" value='Slow'>
	            <label class="form-check-label" for="exampleCheck1">Slow</label>
	          </div>
	          <div class="dropdown-item">
	            <input type="radio" class="form-check-input" name="growth" value='NULL' checked="checked">
	            <label class="form-check-label" for="exampleCheck1">None</label>
	          </div>
	        </div>
	      </div>
	      <input type="submit" value="Apply Filter" class="btnAddAction mt-3 mb-3 btn btn-primary btn-block" name"btnfilter"/>
	    </div>
	  </form>



			<div class="col">

		<?php
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$search = $_POST["search"];
		$garden_product_array = $db_handle->runQuery("SELECT * FROM gardenproducts WHERE Name LIKE '%$search%'");
		$product_array = $db_handle->runQuery("SELECT * FROM tree WHERE Name LIKE '%$search%'");
		if (!empty($product_array)) {
			foreach ($product_array as $key => $value) {
				?>

				<div class="row-4 mt-3 border bg-light text-center">

					<form method="post" action="products.php?action=add&Code=<?php echo $product_array[$key]["Code"]; ?>">

						<div class="row">

							<div class="col-lg-3 mt-1 ml-1 mr-1 mb-1">
								<img class="img-thumbnail products-thumb" src="images/<?php echo $product_array[$key]["Image"]; ?> " />
							</div>

							<div class="col-lg mt-2 text-left scale-text-center">
								<h3>
									<form action="products.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>">
										<input type="hidden" name="hidden_code" value=<?php echo $product_array[$key]["Code"]; ?> />
										<a class="product-title" href="item.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>"><?php echo $product_array[$key]["Name"]; ?></a>
									</form>
								</h3>
							</div>

							<div class="col-lg text-right mr-3 scale-price-center">
								<h3>
									<div class="product-Price"><?php echo "$" . $product_array[$key]["Price"]; ?><br></div>
								</h3>
								<div class="cart-action form-inline justify-content-center mt-3 scale-float-center">
									<input type="text" class="product-quantity form-control mr-1 ml-1 prod-qty-maxwidth btn-lg" Name="quantity" maxlength="2" size="2" value="1" pattern="[0-99]" />
									<input type="submit" value="Add to Cart" class="btnAddAction btn btn-lg btn-primary mr-1 ml-1" />
								</div>
							</div>

						</div>

					</form>

				</div>

		<?php
		}
		}
		if (!empty($garden_product_array)) {
			foreach ($garden_product_array as $key => $value) {
				?>

				<div class="row-4 mt-3 border bg-light text-center">

					<form method="post" action="garden-products.php?action=add&Code=<?php echo $garden_product_array[$key]["Code"]; ?>">

						<div class="row">

							<div class="col-lg-3 mt-1 ml-1 mr-1 mb-1">
								<img class="img-thumbnail products-thumb" src="images/<?php echo $garden_product_array[$key]["Image"]; ?> " />
							</div>

							<div class="col-lg mt-2 text-left scale-text-center">
								<h3>
									<form action="garden-products.php?action=item&Code=<?php echo $garden_product_array[$key]["Code"]; ?>">
										<input type="hidden" name="hidden_code" value=<?php echo $garden_product_array[$key]["Code"]; ?> />
										<a class="product-title" href="garden-item.php?action=item&Code=<?php echo $garden_product_array[$key]["Code"]; ?>"><?php echo $garden_product_array	[$key]["Name"]; ?></a>
									</form>
								</h3>
							</div>

							<div class="col-lg text-right mr-3 scale-price-center">
								<h3>
									<div class="product-Price"><?php echo "$" . $garden_product_array[$key]["Price"]; ?><br></div>
								</h3>
								<div class="cart-action form-inline justify-content-center mt-3 scale-float-center">
									<input type="text" class="product-quantity form-control mr-1 ml-1 prod-qty-maxwidth btn-lg" Name="quantity" maxlength="2" size="2" value="1" pattern="[0-99]" />
									<input type="submit" value="Add to Cart" class="btnAddAction btn btn-lg btn-primary mr-1 ml-1" />
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
