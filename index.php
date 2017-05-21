<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meduvate: Start up Page</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css" media="screen" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.shop.js"></script>


</head>
<body>



<div id="site">
    <header id="masthead">
        <h1>Meduvate:<span class="tagline">Posters for Medical health care</span></h1>

    </header>

    <div id="content">

        <div class="form-group">
            <div class="col-sm-10">
                <ul>
                    <li> <label class="control-label col-sm-2" >Awareness:</label>
                        <select name='hind'>
                            <option selected>Select from dropdown</option>
                            <option>Heart</option>
                            <option>Cancer</option>
                            <option>Brain</option>
                            <option>Limbs</option>
                        </select>
                    </li>
                    <br> </br>

                    <li> <a href="/shop/Features_page.php" >Motivation</a></li>

                </ul>
            </div>

        </div>

    </div>
</div>
</body>
</html>