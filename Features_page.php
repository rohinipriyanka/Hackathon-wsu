<?php
session_start();
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>

    <title>Meduvate: Motivational Images</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css" media="screen" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.shop.js"></script>

</head>

<body>

<div id="site">
    <header id="masthead">
        <h1>Meduvate:<span class="tagline">Posters for Medical health care</h1>
    </header>
    <div id="content">
        <div id="Motivation">
      <?php
        $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $results = $mysqli->query("SELECT Product_ID, Product_Name, Product_Image, Product_Price FROM products");
      ?>
        </div>
            <ul>
                <li>
                    <div class="Motivation-image">
                        <img src="images/CardiovascularMotivation.jpg" alt="" />
                    </div>
                    <div class="product-description"  data-name="Image #1" data-price="5">
                        <h3 class="product-name">CardiovascularMotivation Poster</h3>
                        <p class="product-price">&dollar; 5</p>
                        <form class="add-to-cart" action="/shop/cart.php" method="post">
                            <div>
                                <label for="qty-1">Quantity</label>
                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                            </div>
                            <p><input type="submit" value="Add to cart" class="btn" /></p>
                        </form>
                    </div>
                </li>

                <li>
                    <div class="Motivation-image">
                        <img src="images/OncologyMovation.jpg" alt="" />
                    </div>
                    <div class="product-description" data-name="Image #2" data-price="8">
                        <h3 class="product-name">OncologyMovation Poster</h3>
                        <p class="product-price">&dollar; 8</p>
                        <form class="add-to-cart" action="/shop/cart.php" method="post">
                            <div>
                                <label for="qty-2">Quantity</label>
                                <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                            </div>
                            <p><input type="submit" value="Add to cart" class="btn" /></p>
                        </form>
                    </div>
                </li>

                <li>
                    <div class="product-image">
                        <img src="images/MentalHealthMotivation.jpg" alt="" />
                    </div>
                    <div class="product-description" data-name="Image #3" data-price="11">
                        <h3 class="product-name">MentalHealthMotivation poster</h3>
                        <p class="product-price">&dollar; 11</p>
                        <form class="add-to-cart" action="/shop/cart.php" method="post">
                            <div>
                                <label for="qty-3">Quantity</label>
                                <input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
                            </div>
                            <p><input type="submit" value="Add to cart" class="btn" /></p>
                        </form>
                    </div>
                </li>
            </ul>


        <div class="container" id="teamMembers">
            <div class="row">

              <table>

                <div class="col-lg-3 col-md-6 text-center">
                    <div>
                        <div class="service-box">
                            <i class="fa fa-4x wow bounceIn text-primary">
                                <!-- Trigger the Modal -->
                                <img id="myImg" src="images/RuoxiFu.png" width=150px height=165px
                                     alt="">
                            <h2>Ruoxi Fu<br>
                            <i><small>Founder & President</small></i>
                            </h2>
                            <br>
                            <p class='alignment-left'>
                              Ruoxi Fu holds a Bachelor's of Science degree in Biopsychology, Cognition, and Neuroscience from the University of Michigan-Ann Arbor. He is currently pursuing a Doctor of Physical Therapy and Master of Business Administration dual-degree at the University of Michigan-Flint, where he is a second year student. Ruoxi is passionate about healthcare and entrepreneurship, and seeks to create value within the community where he sees value can be added. In his free time, Ruoxi enjoys computer programming, singing, exercising, and sharing unique experiences with new people. After completing his education, he hopes to continue his involvement with early-stage startups in the capacity of a project manager, content developer, and/or angel investor.
                            </p>
                            <p class='alignment-left'>
                              <i>In addition to assembling and managing the team, Ruoxi is largely responsible for the front-end design and development of this website.</i>
                            </p>
                            <p class='alignment-left'>
                              <a class='mediabtn' href='https://www.linkedin.com/in/ruoxifu'>LINKEDIN</a>
                            </p>

                            </i>
                            <h3>Ruoxi Fu</h3>
                            <p class="text-muted" style="font-size: 15.5px">Founder & President</p>
                            <p class="text-muted" style="font-size: 12px">Team Management & Web Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x wow bounceIn text-primary" data-wow-delay=".1s">
                            <!-- Trigger the Modal -->
                            <img id="myImg2" src="images/Rohinipriyanka.png" width=150px height=165px  alt="">
                            <h2>Rohini Priyanka GR<br>
                          <i><small>Lead Programmer</small></i>
                          </h2>
                          <br>
                          <p class='alignment-left'>
                          Rohini Priyanka.GR,has received her Master's Degree in Computer Engineering at Wayne State University,Detroit,MI,USA.Rohini's interests focuses mainly on Web Programming and Andriod developement.Currently, Rohini Priyanka is working on multiple startup projects, in which she leads and excels at software design and development. In the future, she seeks to develop innovative technologies to positively impact and simplify the human experience.
                          <p class='alignment-left'>
                            <i>Responsibility of Rohini Priyanka.GR involves in building  back-end framework for this website.Also,in designing and developing user-friendly website.</i>
                          </p>
                          <p class='alignment-left'>
                            <a class='mediabtn' href='https://in.linkedin.com/in/rohinipriyanka'>LINKEDIN</a>
                          </p>
                        </i>
                        <h3>Rohini Priyanka GR</h3>
                        <p class="text-muted" style="font-size: 15.5px">Lead Programmer</p>
                        <p class="text-muted" style="font-size: 12px">Web Development & Administration</p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x wow bounceIn text-primary" data-wow-delay=".2s">
                            <!-- Trigger the Modal -->
                            <img id="myImg3" src="images/YunboNie.png" width=150px height=165px alt="">
                        <h2>Yunbo Nie<br>
                        <i><small>Chairman - Content Distribution</small></i>
                        </h2>
                        <br>
                        <p class='alignment-left'>
                          Yunbo Nie earned his Bachelor’s of Science degree in Biology from the University of Pennsylvania. He previously worked as a Research Assistant in genetics and cancer biology. While serving at the American Red Cross, he worked with both the Biomedical Services and Disaster Cycle Services divisions, specializing in volunteer recruitment and training, public health, and humanitarian services. Yunbo is currently on the pre-medical track and teaches K-12 students in Oakland County school districts. He is also interested in business, non-profit organizations, culinary exploration, and piano. He hopes to one day become both a medical practitioner and entrepreneur.
                        <p class='alignment-left'>
                          <i>Yunbo is responsible for the content development, delivery, and marketing of this website.</i>
                        </p>
                        <p class='alignment-left'>
                          <a class='mediabtn' href=' '>LINKEDIN</a>
                        </p>
                        </i>
                        <h3>Yunbo Nie</h3>
                        <p class="text-muted" style="font-size: 15.5px">Chairman - Content Distribution</p>
                        <p class="text-muted" style="font-size: 12px">Content Management & Marketing</p>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x wow bounceIn text-primary" data-wow-delay=".3s">
                            <!-- Trigger the Modal -->
                            <img id="myImg4" src="images/RaghuManthena.png" width=150px height=165px alt="">
                        <h2>Raghu Manthena<br>
                        <i><small>Software Engineer</small></i>
                        </h2>
                        <br>
                        <p class='alignment-left'>
                          Raghu Manthena is a senior studying Mathematics and Computer Science at Eastern Michigan University. He spent the last year working as a junior java developer at Chrysler and R2 Technologies LLC. Raghu is passionate about Japanese culture and plans to continue pursuing a career in computer science.
                        <p class='alignment-left'>
                          <i>Raghu is responsible for tech support and web hosting for this website.</i>
                        </p>
                        <p class='alignment-left'>
                          <a class='mediabtn' href='https://www.linkedin.com/in/raghu-manthena-b6253078/'>LINKEDIN</a>
                        </p>

                        </i>
                        <h3>Raghu Manthena</h3>
                        <div class="text-center">
                            <p class="text-muted" style="font-size: 15.5px">Software Engineer</p>
                            <p class="text-muted" style="font-size: 12px">Web & IT Support</p>
                        </div>


                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="service-box">
                                <i class="fa fa-4x wow bounceIn text-primary" data-wow-delay=".3s">
                                    <!-- Trigger the Modal -->
                                    <img id="myImg5" src="images/Moe.png" width=150px height=165px
                                         alt="">
                            <h2>Mohamed Jaber<br>
                            <i><small>Software Engineer</small></i>
                            </h2>
                            <br>
                            <p class='alignment-left'>
                                My name is Mohamed Jaber and I am majoring in information systems management at Wayne

                                State. I aspire to develop the skills and knowledge that I have already acquired from my previous

                                educational experiences and my own self-study. My goal is nothing less than having the

                                knowledge of all the critical aspects of information technology, such as programming languages,

                                software engineering, networks, information systems and hardware development, and ultimately

                                run my own cyber security organization. <p class='alignment-left'>

                            </p>
                            <p class='alignment-left'>
                              <a class='mediabtn' href=''>LINKEDIN</a>
                            </p>

                                </i>
                                <h3>Mohamed Jaber</h3>
                                <div class="text-center">
                                    <p class="text-muted" style="font-size: 15.5px">Software Engineer</p>
                                    <p class="text-muted" style="font-size: 12px">Web & IT Support</p>
                                </div>
                            </div>
                        </div>
              </table>

            </div>
    </div>
</div>




<footer id="site-info">
    Copyright &copy;
</footer>

</body>
</html>
