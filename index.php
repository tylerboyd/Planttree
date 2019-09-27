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

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <!-- Custom Stylesheet-->
  <link rel="stylesheet" href="styles/custom-styles.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>

  <!--Header-->

  <header>

    <!--Nav Bar (Apply to other pages-->

    <?php include("banner.php"); ?>
    <?php include("nav.php"); ?>

  </header>
  <!--/Header-->

  <!--Main Section-->
  <main>

    <!--First Slider-->
    <div class="container-fluid p-0">
      <div class="site-slider">
        <div class="slider-one">
          <div>
            <img ban1 src="Assets/Carousel Images/Banner Sample1.PNG" class="img-fluid" alt="Banner 1">
          </div>
          <div>
            <img ban1 src="Assets/Carousel Images/Banner Sample 2.PNG" class="img-fluid" alt="Banner 2" />
          </div>
          <div>
            <img ban1 src="Assets/Carousel Images/Banner Sample1.PNG" class="img-fluid" alt="Banner 3" />
          </div>
        </div>
        <div class="slider-btn">
          <span class="previous position-top"><i class="fas fa-chevron-left"></i></span>

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

    <div class="card" style="width: 35%; float: left;">

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

  <!-- Footer -->
    <?php include("footer.php"); ?>
  <!-- End Footer -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="JS/main.js"></script>
</body>

</html>