<!doctype html>
<html lang="en">

<head>
  <title>Confirmation</title>

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
  <?php include("banner.php"); ?>
  <?php include("nav.php"); ?>

  <div class="container mt-5">
    <h3 class="h3">Confirming order (ORDERID?)</h3>

    <div class="row py-3 px-4">
      <div class="container-fluid" id="cart-holder">
        <div class="table-responsive" id="shopping-cart">


          <?php
          session_start();

          if (isset($_SESSION["cart_item"])) {
            $total_quantity = 0;
            $total_Price = 0;
            ?>
            <div id="cart-header" style="p-10;">
              <h5 id="head-text" style="text-align: center;"> &nbsp; <br>Order Summary<br> </h5>
            </div>
            <table class="table table-sm table-hover" align="center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" style="text-align:center;">Name</th>
                  <th scope="col" style="text-align:center;">Code</th>
                  <th scope="col" style="text-align:center;">Amount</th>
                  <th scope="col" style="text-align:center;">Unit Price</th>
                  <th scope="col" style="text-align:center;">Price</th>
                  <th scope="col" style="text-align:center;"></th>
                </tr>
              </thead>

              <?php
                foreach ($_SESSION["cart_item"] as $item) {
                  $item_Price = $item["quantity"] * $item["Price"];
                  ?>
                <tr>
                  <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>"><?php echo $item["Name"]; ?>
                    </a></td>

                  <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $item["Code"]; ?>"><?php echo $item["Code"]; ?></a></td>

                  <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $item["Code"]; ?>"><?php echo $item["quantity"]; ?></a></td>

                  <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $item["Code"]; ?>"><?php echo "$ " . $item["Price"]; ?></a></td>

                  <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $item["Code"]; ?>"><?php echo "$ " . number_format($item_Price, 2); ?></a></td>
                  <td style="text-align:center;"><a href="products.php?action=remove&Code=<?php echo $item["Code"]; ?>" class="btnRemoveAction"><i class="fas fa-times" alt="Remove Item"></i></a></td>
                </tr>

              <?php
                  $total_quantity += $item["quantity"];
                  $total_Price += ($item["Price"] * $item["quantity"]);
                }
                ?>

              <tr>
                <td colspan=2 style="text-align:right;"><b><em>Total:&nbsp;&nbsp;&nbsp;</em></b></td>
                <td style="text-align:center;"><b><?php echo $total_quantity; ?></b></td>
                <td style="text-align:center;"><strong><?php echo "$ " . number_format($total_Price, 2); ?></strong></td>
                <td></td>
              </tr>

            </table>
        </div>
      </div>

    <?php
    } else {
      ?>

      <div class="container" id="no-records">

        <div class="no-records-content height: 10%">
          <h5 id="head-text" style=" text-align: Center;"> <br><br>Your Cart is Empty! <br> <br><b>(ノಠ益ಠ)ノ彡┻━┻</b></h5>
        </div>
      </div>
    <?php
    }
    ?>


    <div class="w-100">
      <div class="row">
        <div class="col-md">

          <h4>Shipping Details</h4>
          <form>
            <div class="form-group row mt-3">
              <div class="col-md">
                <div class="border">
                  <p class="mt-3 mb-3 ml-3 mr-3">
                    <?php echo $_POST["fName"] . " " . $_POST["lName"]; ?> <br>
                    <?php echo $_POST["address"] . "<br>";
                    if ($_POST["address2"] != null)
                    {
                      echo $_POST["address2"] . "<br>";
                    }
                    echo $_POST["city"] . ", ";
                    echo $_POST["country"] . "<br>";
                    echo $_POST["postcode"];   ?>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md">
          <h4>Payment</h4>

          <form>
            <div class="form-group row mt-3">
              <div class="col-md">
                <div class="border">
                  <p class="mt-3 mb-3 ml-3 mr-3">

                    <b>Billing Address</b><br>
                    <?php echo $_POST["fName"] . " " . $_POST["lName"]; ?> <br>
                    <?php echo $_POST["address"] . "<br>";
                    if ($_POST["address2"] != null)
                    {
                      echo $_POST["address2"] . "<br>";
                    }
                    echo $_POST["city"] . ", ";
                    echo $_POST["country"] . "<br>";
                    echo $_POST["postcode"] . "<br><br>"; ?>

                    <b>Contact</b><br>

                    <?php echo $_POST["email"]; 
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


    </div>

    

    <div class="buttonContainer text-center">
      <button class="btn btn-primary btn-lg mr-2" type="submit">Confirm Order</button>
      <button class="btn btn-secondary btn-lg" type="submit">Cancel Order</button>
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


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>