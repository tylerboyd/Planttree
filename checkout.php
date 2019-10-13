<!doctype html>
<html lang="en">

<head>
  <title>checkout</title>

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
  <?php include("nav.php");
  session_start(); ?>

  <div class="w-75 m-auto ">
    <div class="row mt-4">
      <div class="col">
        <h2 class="mt-2 mb-4 text-center">Checkout</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-7 border">
        <h4 class="mb-3 mt-3">Billing address</h4>
        <form class="needs-validation" action="confirmation.php" method="post">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="fName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted"></span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>
          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
          <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
          </div>
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <select class="custom-select d-block w-100" id="country" name="country" required="">
                <option value="">Choose...</option>
                <option>New Zealand</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="City">City</label>
              <select class="custom-select d-block w-100" id="state" name="city" required="">
                <option value="">Choose...</option>
                <option>Auckland</option>
                <option>Wellington</option>
                <option>Christchurch</option>
                <option>Dunedin</option>
                <option>Hamilton</option>
                <option>Queenstown</option>
                <option>Napier</option>
                <option>Rotorua</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid City.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="Postcode">Postcode</label>
              <input type="text" class="form-control" id="zip" name="postcode" placeholder="" required="">
              <div class="invalid-feedback">
                Postcode required.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
      </div>

      <div class="col-lg">
        <div class="row py-3 px-4">
          <div class="w-100" id="cart-holder">
            <div class="table-responsive" id="shopping-cart">

              <?php

              if (isset($_SESSION["cart_item"])) {
                $total_quantity = 0;
                $total_Price = 0;
                ?>

                <table class="table table-sm table-hover" align="center">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" style="text-align:center;">Name</th>
                      <th scope="col" style="text-align:center;">Amount</th>
                      <th scope="col" style="text-align:center;">Unit Price</th>
                      <th scope="col" style="text-align:center;">Price</th>
                    </tr>
                  </thead>
                  <?php
                    foreach ($_SESSION["cart_item"] as $item) {
                      $item_Price = $item["quantity"] * $item["Price"];
                      ?>
                    <tr>
                      <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $product_array[$key]["Code"]; ?>"><?php echo $item["Name"]; ?>
                        </a></td>

                      <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $item["Code"]; ?>"><?php echo $item["quantity"]; ?></a></td>

                      <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $item["Code"]; ?>"><?php echo "$ " . $item["Price"]; ?></a></td>

                      <td style="text-align:center;"><a href="item.php?action=item&Code=<?php echo $item["Code"]; ?>"><?php echo "$ " . number_format($item_Price, 2); ?></a></td>
                      
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

        </div>

        <div class="PromoField input-group w-50 mb-3 ml-auto">
          <input type="text" class="form-control" placeholder="Promo Code">
          <div class="input-group-append">
            <button class="btn btn-warning input-group-append">Redeem</button>
          </div>
        </div>

        <div class="delivery-options ml-1 mb-5">
        <h4 class="mb-3">Delivery Option</h4>
          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input">
            <label class="custom-control-label">Deliver to your location</label>
          </div>

          <div class="input-group mb-3">
            
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Delivery option</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">+ $10 - Urban 1-10 Products</option>
              <option value="2">+ $17 - Rural 1-10 Products</option>
              <option value="3">+ $22 - Outside Auckland 1-10 Products</option>
              <option value="3">+ $0  - Free shipping 11+ Products</option>
            </select>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input">
            <label class="custom-control-label">Pickup from branch</label>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Pickup Branch</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">445 Mount Eden Road, Mount Eden, Auckland</option>
              <option value="2">29 Kerwyn Ave, East Tamaki, Auckland</option>
              <option value="3">67 Kell Dr, Albany, Auckland</option>
            </select>
          </div>
        </div>

        <div class="text-center">
          <button class="btn btn-primary btn-lg btn-block ml-1 mr-1" type="submit">Place Order</button>
          <a class="btn btn-lg btn-secondary btn-block ml-1 mr-1" href="cart.php">Cancel Order</a>
        </div>
      </div>
    </div>
    </form>
  </div>
  <!-- Footer starts here -->
  <?php
  include("footer.php");
  ?>
  <div class="mt-5">
    <!-- padding -->
  </div>
  <!-- Footer ends -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>