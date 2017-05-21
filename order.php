<?php
session_start();
include_once("config.php");

// check POST from form and validate reqeust
if (!$_POST || !$_POST['name']) {
    // Go back to checkout
}

// verify products in cart
// if not products, go back to Features page

// save to order, order_products table
// create new order
// grab order id
// loop through cart items (from $_SESSION or $_POST)

foreach ($_SESSION["items"] as $cart_itm) {
    $sql = "insert into order_products order_id, product_id, quantity VALUES ()";
    $mysqli->query($sql);
}
// save earch order_product to the table

// show order invoice

?>
<!DOCTYPE html>
<html>
<head>
    <title>Meduvate: Your Order</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css" media="screen" type="text/css" />
    <script type="text/javascript" src="jquery.shop.js"></script>


</head>

<body id="checkout-page">
<?php
echo "Hello World!";
?>

<div id="site">
    <header id="masthead">
        <h1>Meduvate:<span class="tagline">Posters for Medical health care</h1>
    </header>
    <div id="content">
        <h1>Your Order</h1>
        <table id="checkout-cart" class="shopping-cart">
            <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div id="pricing">

            <p id="shipping">
                <strong>Shipping</strong>: <span id="sshipping"></span>
            </p>

            <p id="sub-total">
                <strong>Total</strong>: <span id="stotal"></span>
            </p>
        </div>

        <div id="user-details">
            <h2>Your Data</h2>
            <div id="user-details-content"></div>
        </div>




        <form id="paypal-form" action="" method="post">
            <input type="hidden" name="cmd" value="_cart" />
            <input type="hidden" name="upload" value="1" />
            <input type="hidden" name="business" value="" />

            <input type="hidden" name="currency_code" value="" />
            <input type="submit" id="paypal-btn" class="btn" value="Pay with PayPal" />
        </form>


    </div>



</div>

<footer id="site-info">
    Copyright &copy;
</footer>

</body>
</html>