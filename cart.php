<HTML>

<Head>
	<title>Plant a Tree </title>
</Head>

<Body>
	<h1> Shopping Cart </h1>
	<li>
		<a href="index.php">Home</a>
	</li>
	<li>
		<a href="products.php">Products</a>
	</li>

	<div id="shopping-cart">
		<div class="txt-heading">Shopping Cart</div>

		<a id="btnEmpty" href="products.php?action=empty">Empty Cart</a>
		<?php
		session_start();
		if (isset($_SESSION["cart_item"])) {
			$total_quantity = 0;
			$total_Price = 0;
			?>
			<table class="tbl-cart" cellpadding="2" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;">Name</th>
						<th style="text-align:left;">Code</th>
						<th style="text-align:left ;" width="5%">Quantity</th>
						<th style="text-align:left;" width="10%">Unit Price</th>
						<th style="text-align:left;" width="10%">Price</th>
						<th style="text-align:right;" width="5%">Remove</th>
					</tr>
					<?php
						foreach ($_SESSION["cart_item"] as $item) {
							$item_Price = $item["quantity"] * $item["Price"];
							?>
						<tr>
							<td><img src="images/<?php echo $item["Image"]; ?>" class="cart-item-Image" /><?php echo $item["Name"]; ?></td>
							<td><?php echo $item["Code"]; ?></td>
							<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
							<td style="text-align:right;"><?php echo "$ " . $item["Price"]; ?></td>
							<td style="text-align:right;"><?php echo "$ " . number_format($item_Price, 2); ?></td>
							<td style="text-align:center;"><a href="products.php?action=remove&Code=<?php echo $item["Code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
						</tr>
					<?php
							$total_quantity += $item["quantity"];
							$total_Price += ($item["Price"] * $item["quantity"]);
						}
						?>

					<tr>
						<td colspan="2" align="right">Total:</td>
						<td align="right"><?php echo $total_quantity; ?></td>
						<td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_Price, 2); ?></strong></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		<?php
		} else {
			?>
			<div class="no-records">Your Cart is Empty</div>
		<?php
		}
		?>
	</div>
</Body>

</HTML>
