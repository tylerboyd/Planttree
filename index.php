<!DOCTYPE html>
<html lang="en">

<head>

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
  
  <style type ="text/css">
      
      #slider-holder{
          margin: auto;
          background-color: darkgreen;
          max-width: 100vh; 
          
      }
      #slider{
          
          overflow: hidden;
          background-color: darkgreen;
          
      }
      
      #slider figure img {
          width: 20%;
          float: left;
          max-width: 100%;
      }
      
      #slider figure{
          position: relative;
          width: 500%;
          margin: 0;
          left: 0;
          animation: 20s slider infinite;
      }
      
      
      
      @keyframes slider{
          0%{
              left 0;
          }
          20%{
              left: 0;
          }
          25%{
              left: -100%;
          }
          45%{
              left: -100%;
          }
          50%{
             left: -200%; 
          }
          70%{
              left: -200%
          }
          75%{
              left: -300%;
          }
          95%
          {
              left: -300%;
          }
          100%
          {
              left: -400%
          }
      }
      
      </style>

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
   <div id="slider-bg" style="background-image: radial-gradient(#45ff4d, #166125, #000000);"
}>
    <div id="slider-holder">

       <div id="slider">
           <figure>
               <img ban1 src="Assets/Carousel Images/Bannerquote1.png" class="img-fluid" alt="Banner 1">

               <a href="garden-item.php?action=item&Code=wsnT5"><img ban1 src="Assets/Carousel%20Images/ProductBanner1.png" class="img-fluid" alt="Banner 2" /></a>

               <img ban1 src="Assets/Carousel%20Images/Bannerquote2.png" class="img-fluid" alt="Banner 3" />

               <a href="garden-item.php?action=item&Code=aHMcd"><img ban1 src="Assets/Carousel%20Images/ProductBanner2.png" class="img-fluid" alt="Banner 4" /></a>

               <img ban1 src="Assets/Carousel Images/Bannerquote1.png" class="img-fluid" alt="Banner 1">
           </figure>
       </div>
    </div>
    </div>

  </main> 
  
      
  <!--/Main Section-->
  
<div class="container">
    <div class="row w-100">
    <div class="col-md-10 mt-3">
      <h4>About Us</h4>
      <h6 class="text-muted">Who We Are</h6>
      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="card-link">Our Products</a>
      <a href="#" class="card-link">Tree Tips</a>
    </div>

    <div class="col-md-2 mt-3">
    <h4>Our Services</h4>
        <h6 class="text-muted">What We Do</h6>
        <ul>
          <li> Sell trees</li>
          <li> Sell trees</li>
          <li> Sell trees</li>
        </ul>
    </div>
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