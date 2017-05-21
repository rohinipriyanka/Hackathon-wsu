<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Meduvate: Shopping Cart</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css" media="screen" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.shop.js"></script>


</head>

<body>


<div id="site">
    <header id="masthead">
        <h1>Meduvate: <span class="tagline">Posters for Medical health care</h1>
    </header>
    <div id="content">
        <h1>Your Shopping Cart</h1>

        <?php
        $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

//       $sql = "Insert into products(Product_ID, Product_Name, Product_Image, Product_Price)values(2,'Priya2','C:\Users\Rohini Priyanka\Downloads\priya.jpg',10);";
//        $sql .= "Insert into products(Product_ID, Product_Name, Product_Image, Product_Price)values(3,'Priya3','C:\Users\Rohini Priyanka\Downloads\priya1.jpg',11);";
//        $sql .= "Insert into products(Product_ID, Product_Name, Product_Image, Product_Price)values(4,'Priya4','C:\Users\Rohini Priyanka\Downloads\priya2.jpg',12);";
//
//        if ($mysqli->multi_query($sql)) {
//            echo "New records created successfully";
//        } else {
//            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//        }


     //   $results = $mysqli->query("Insert into products(Product_ID, Product_Name, Product_Image, Product_Price)values(1,'Priya','C:\Users\Rohini Priyanka\Downloads\priya.jpg',10)");

        ?>
        <form id="shopping-cart" action="cart.php" method="post">
            <table class="shopping-cart">
                <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Qty</th>
                    <th scope="col" colspan="2">Price</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <p id="sub-total">
                <strong>Sub Total</strong>: <span id="stotal"></span>
            </p>
            <ul id="shopping-cart-actions">
                <li>
                    <input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
                </li>
                <li>
                    <input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
                </li>
                <li>
                    <a href="Features_page.php" class="btn">Continue Shopping</a>
                </li>
                <li>
                    <a href="checkout.php" class="btn">Checkout your posters</a>
                </li>
            </ul>
        </form>
    </div>



</div>

<footer id="site-info">
    Copyright &copy;
</footer>

</body>
</html>
