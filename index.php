

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!--font awesome cdn-->
    <script src="https://kit.fontawesome.com/a7d4a476f6.js" crossorigin="anonymous"></script>
    
    <!--Slick Slider-->
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    

    
    
    <!-- Custom Stylesheet-->
    <link rel="stylesheet" href="custom-styles.css">
    
</head>
<body>

  <!--Header-->
   <header>
    <div class="container fluid">
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
   
   <!--Main Section-->
   <main>
    
    <!--First Slider-->
    <div class="container-fluid p-0">
        <div class="site-slider">
            <div class="slider-one">
            <div>
            <img src="Assets/Carousel Images/Banner Sample1.PNG" class="img-fluid" alt="Banner 1">
             </div>
             <div>
            <img src="Assets/Carousel Images/Banner Sample 2.PNG" class="img-fluid" alt="Banner 2" />
             </div>
             <div>
            <img src="Assets/Carousel Images/Banner Sample1.PNG" class="img-fluid" alt="Banner 3" />
             </div> 
            </div>
            <div class="slider-btn">
                <span class="previous position-top"><i class="fas fa-chevron-left" ></i></span>
                
                <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
            
            </div>   
        </div>     
    </div> 
      
       
   </main>
   <!--/Main Section-->
   <div>
   <div class="card" style="width: 65%; float: left">
  <div class="card-body">
    <h5 class="card-title">About Us</h5>
    <h6 class="card-subtitle mb-2 text-muted">Who We Are</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Our Products</a>
    <a href="#" class="card-link">Tree Tips</a>
  </div>
</div>
 
 <div class="card" style="width: 35%; float left">
  <div class="card-body">
    <h5 class="card-title">Our Services</h5>
    <h6 class="card-subtitle mb-2 text-muted">What We Do</h6>
    <ul>
    <li> Sell trees</li>
    <li> Sell trees</li>
    <li> Sell trees</li>
    </ul>
    
  </div>
</div>
 
 </div>
 
   
   <footer>
        <div class="row mt-5 footer-cell bg-light">
    <div class="col-sm footer-cell">
        <br>
        <h5>Services</h5>
        <nav class="nav flex-column">
            <a class="nav-link" href="#">Gardening</a>
            <a class="nav-link" href="#">E-mail reminders</a>
            <a class="nav-link" href="#">AR Trees</a>
        </nav>
    </div>
    <div class="col-sm footer-cell">
        <br>
        <h5>Payment Methods</h5>
        <nav class="nav flex-column">
            <a class="nav-link" href="#">Active</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>
    </div>
    <div class="col-sm">
        <br>
        <h5>Quicklinks</h5>
        <nav class="nav flex-column">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#">Trees</a>
            <a class="nav-link" href="#">Related products</a>
            <a class="nav-link" href="#">Contact us</a>
            <a class="nav-link" href="#">Locations</a>
            <a class="nav-link" href="#">Help</a>
        </nav>
    </div>
    <div class="col-sm">
        <br>
        <h5>Help</h5>
        <nav class="nav flex-column">
            <a class="nav-link" href="#">Basics of tree care</a>
            <a class="nav-link" href="#">Recommended products</a>
            <a class="nav-link" href="#">Beginners guide</a>
            <a class="nav-link " href="#">Book a gardener</a>
            <a class="nav-link " href="#">Newsletter</a>
            <a class="nav-link " href="#">Become a VIP customer</a>
        </nav>
    </div>
</div>
   </footer>
   
    
	
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	
	<script src="JS/main.js"></script>
</body>
</html>
