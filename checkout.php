<?php
session_start();
include_once("config.php");
?>



<!DOCTYPE html>
<html>
<head>
    <title>Meduvate: Checkout</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css" media="screen" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.shop.js"></script>


</head>

<body id="checkout-page">
<?php
echo "Hello World!";
?>

<div id="site">
    <header id="masthead">
        <h1>Meduvate: <span class="tagline">Posters for Medical health care</h1>
    </header>
    <div id="content">
        <h1>Checkout</h1>

        <?php
        if(isset($_SESSION["items"])) //check session var
        {
            $total = 0; //set initial total value
            $b = 0; //var for zebra stripe table
            foreach ($_SESSION["items"] as $cart_itm)
            {
                //set variables to use in content below
                $Product_Name = $cart_itm["Product_Name"];
                $Product_Qty = $cart_itm["Product_Qty"];
                $Product_Price = $cart_itm["Product_Price"];

                $subtotal = ($Product_Price * $Product_Qty); //calculate Price x Qty

                // insert into order_products order_id, product_id, quantity VALUES ()

                $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe
                echo '<tr class="'.$bg_color.'">';
                echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$Product_Name.']" value="'.$Product_Qty.'" /></td>';
                echo '<td>'.$Product_Name.'</td>';
                echo '<td>'.$currency.$Product_Price.'</td>';
                echo '<td>'.$currency.$subtotal.'</td>';

                echo '</tr>';
                $total = ($total + $subtotal); //add subtotal to total var
            }

            $grand_total = $total + $shipping_cost; //grand total including shipping cost
            foreach($cart_itm as $key => $value){ //list and calculate all taxes in array
                $cart_itm.$Product_Name;
                $cart_itm.$Product_Qty;
                $cart_itm.Product_ID;
                //add tax val to grand total
            }


        }
        ?>




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

        <form action="order.php" method="post" id="checkout-order-form">
            <h2>Your Details</h2>

            <fieldset id="fieldset-billing">
                <legend>Billing</legend>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
                </div>
                <div>
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="zip">ZIP Code</label>
                    <input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="country">Country</label>
                    <select name="country" id="country" data-type="string" data-message="This field cannot be empty">
                        <option value="">Select</option>
                        <option value="US">USA</option>
                        <option value="US">India</option>
                        <option value="US">China</option>
                        <option value="US">Korea</option>

                    </select>
                </div>
            </fieldset>

            <div id="shipping-same">Same as Billing <input type="checkbox" id="same-as-billing" value=""/></div>

            <fieldset id="fieldset-shipping">

                <legend>Shipping</legend>

                <div>
                    <label for="sname">Name</label>
                    <input type="text" name="sname" id="sname" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="semail">Email</label>
                    <input type="text" name="semail" id="semail" data-type="expression" data-message="Not a valid email address" />
                </div>
                <div>
                    <label for="scity">City</label>
                    <input type="text" name="scity" id="scity" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="saddress">Address</label>
                    <input type="text" name="saddress" id="saddress" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="szip">ZIP Code</label>
                    <input type="text" name="szip" id="szip" data-type="string" data-message="This field cannot be empty" />
                </div>
                <div>
                    <label for="scountry">Country</label>
                    <select name="scountry" id="scountry" data-type="string" data-message="This field cannot be empty">
                        <option value="">Select</option>
                        <option value="US">USA</option>
                        <option value="US">India</option>
                        <option value="US">China</option>
                        <option value="US">Korea</option>

                    </select>
                </div>
            </fieldset>

            <p><input type="submit" id="submit-order" value="Submit" class="btn" /></p>

        </form>
    </div>



</div>

<footer id="site-info">
    Copyright &copy;
</footer>

</body>
</html>
