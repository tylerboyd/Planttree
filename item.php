<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$itemListing = $db_handle->runQuery("SELECT * FROM tree WHERE Code='" . $_GET["Code"] . "'");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Plant a Tree</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/custom-styles.css">

</head>

<body>

        <!-- Banner starts -->
        <?php include("banner.php"); ?>
        <!-- Banner ends -->
        <!-- Navbar starts -->
        <?php include("nav.php"); ?>
        <!-- Navbar ends -->
        <div class="row mt-5">
            <div class="col-lg">
                <img class="img-thumbnail" src="images/<?php echo $itemListing[0]["Image"]; ?> " />
            </div>
            <div class="col-lg">

                <h1>
                    <?php
                    if (!isset($itemListing[0]["Name"])) {
                        echo "Null item";
                    } else {
                        echo $itemListing[0]["Name"];
                    }
                    ?>
                </h1>

                <div class="row">
                    <div class="col">
                        <h2>$<?php echo $itemListing[0]["Price"] ?></h2>
                    </div>
                    <div class="col align-self-center text-right">
                        <p>Stock: <?php echo $itemListing[0]["Stock"] ?></p>
                    </div>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="true">Product Details</a>
                        <a class="nav-item nav-link" id="nav-maintenance-tab" data-toggle="tab" href="#nav-maintenance" role="tab" aria-controls="nav-maintenance" aria-selected="false">Maintenance</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                        <h2>Product Details</h2>
                        <p>
                            <?php
                            if ($itemListing[0]["Description"] == null) {
                                echo "No description has been set for this item.";
                            } else {
                                echo $itemListing[0]["Description"];
                            }
                            ?>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-maintenance" role="tabpanel" aria-labelledby="nav-maintenance-tab">
                        <h2>Maintenance</h2>
                        <p>
                            No maintenance information has been set for this item.
                            <?php
                            // if ($itemListing[0]["MaintenanceInfo"] == null) {
                            //     echo "No maintenance information has been set for this item.";
                            // } else {
                            //     echo $itemListing[0]["MaintenanceInfo"];
                            // }
                            ?></p>
                    </div>

                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-lg">
                <!-- Empty space below item image -->
            </div>
            <div class="col-lg text-center">
                <div class="quantity-panel">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="minusQuantity" autocomplete="off">-</label>
                        <label class="btn btn-secondary">
                            <input type="text" class="form-control qty-text-area" maxlength="2" size="2" id="itemQuantity" value="1">
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="addQuantity" autocomplete="off">+</label>
                    </div>
                </div>
                <div class="cart-panel mt-3">
                    <button type="button" class="btn btn-primary btn-block btn-lg">Add to Wheelbarrow</button>
                    <button type="button" class="btn btn-primary btn-block btn-lg">Go to Checkout</button>
                </div>
            </div>
        </div>


    <!-- Footer starts here -->
        <?php
            include("footer.php");
        ?>
        <div class="mt-5"> <!-- padding --> </div>
    <!-- Footer ends -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>