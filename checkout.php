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
  <?php include("nav.php"); ?>


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
    <h5 id="head-text" style="text-align: center;"> &nbsp; <br>Your Cart<br> </h5>
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

			<div id="container">
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

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate="">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted"></span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <select class="custom-select d-block w-100" id="country" required="">
                <option value="">Choose...</option>
                <option>New Zealand</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="City">City</label>
              <select class="custom-select d-block w-100" id="state" required="">
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
              <input type="text" class="form-control" id="zip" placeholder="" required="">
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
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Place Order</button>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>