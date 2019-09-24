	<?php
	session_start();
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	$search = "Blue Gum";	
	$product_array = $db_handle->runQuery("SELECT * FROM tree WHERE Name LIKE '%search%'");
			if (!empty($product_array)) {
				foreach ($product_array as $key => $value) {
					?>
					<div class="product-item">
						<form method="post" action="products.php?action=add&Code=<?php echo $product_array[$key]["Code"]; ?>">
							<div class="product-Image">
								<img src="images/<?php echo $product_array[$key]["Image"]; ?> " />
							</div>
							<div class="product-tile-footer">
								<form action="products.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>">
									<input type="hidden" name="hidden_code" value=<?php echo $product_array[$key]["Code"]; ?> />
									<a class="product-title" href="item.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>"><?php echo $product_array[$key]["Name"]; ?></a>
								</form>
								<div class="product-Price"><?php echo "$" . $product_array[$key]["Price"]; ?></div>
								<div class="cart-action"><input type="text" class="product-quantity" Name="quantity" value="1" pattern="[0-99]" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
							</div>
						</form>
					</div>
			<?php
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
		<link rel="stylesheet" href="custom-styles.css">

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
								<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.html">Trees</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.html">Related Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.html">Contact Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.html">Locations</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="products.html">Help</a>
							</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Dwarf Apple etc..." aria-label="Dwarf Apple etc...">
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

		<h1> Products </h1>
		<li>
			<a href="index.php">Home</a>
		</li>
		<li>
			<a href="cart.php">Cart</a>
		</li>
		<div id="product-grid">
			<div class="txt-heading">Products</div>
		</div>
	</Body>

	</HTML>