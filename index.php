<?php 
session_start();
if (isset($_SESSION['customer'])) {
  header("location:user-index.php");
}

include("connection.php");
error_reporting(0);

?>

<?php

require "header.php";

?>
<title>Wananai - Home</title>
    <!--==============================
    START HERO AREA
=================================-->
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="images/hero4.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">wananai.com</span>
                                    <span class="bold">Increasing Productivity Through Connectivity</span>
                                </h1>
                                <p class="tagline">An online society designed to connect agri-businesses & dedicated to improving productivity.</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="all-products.php" class="btn btn--round btn--lg">Products & Services</a>
                                <a href="all-products.php" class="btn btn--round btn--lg">Popular Items</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="#">
                                <input type="text" class="text_field" placeholder="Search your products...">
                                <div class="search__select select-wrap">
                                    <select name="Location" class="select--field" id="blah">
                                        <option value="">Location</option>
                                        <option value="">Bulawayo</option>
                                        <option value="">Midlands</option>
                                        <option value="">Mashonaland</option>
                                        <option value="">Masvingo</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg">Search Now</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
    <!--================================
    END FEATURE AREA
=================================-->


    <!--================================
    START FEATURED PRODUCT AREA
=================================-->
    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Featured Products and Services</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">
                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/chibage.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    
                                    <a href="single-product.php" class="transparent btn--sm btn--round">View Item</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="single-product.php" class="product_title">
                                        <h4>32Tonnes Dzechibage</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/avatar.png" alt="author image">
                                            <p>
                                                <a href="author.php">Bento</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Rusape</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="category-grid.php">cereals</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">maize</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">chibage</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL 34 000</span>
                                            
                                        </div>
                                        <div class="sell">
                                            
                                        </div>

                                        
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/tsunga.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="single-product.php" class="transparent btn--sm btn--round">View Item</a>
                                    
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="single-product.php" class="product_title">
                                        <h4>29 Bundles of Tsunga</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth.jpg" alt="author image">
                                            <p>
                                                <a href="author.php">Sly</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Binga</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="category-grid.php">horticulture</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">tsunga</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL10 per bundle</span>
                                            </div>
                                        <div class="sell">
                                            
                                        </div>

                                        
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/mombe.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="single-product.php" class="transparent btn--sm btn--round">View Item</a>
                                    
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="single-product.php" class="product_title">
                                        <h4>62 Jersery Cows</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth.jpg" alt="author image">
                                            <p>
                                                <a href="author.php">Leon</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Mazowe</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="category-grid.php">livestock</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">cows</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL 2 000 per beast</span>
                                            </div>
                                        <div class="sell">
                                            
                                        </div>

                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/broiler.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="single-product.php" class="transparent btn--sm btn--round">View Item</a>
                                    
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="single-product.php" class="product_title">
                                        <h4>300 Broilers</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth.jpg" alt="author image">
                                            <p>
                                                <a href="author.php">Leeroy</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Chinhoyi</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="category-grid.php">poultry</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">broilers</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">huku</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL 70 per bird</span>
                                            
                                        </div>
                                        <div class="sell">
                                            
                                        </div>

                                        
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
    <!--================================
    END PRODUCTS AREA
=================================-->


    <!--================================
    START FOLLOWERS FEED AREA
=================================-->
    <!--================================
    END FOLLOWERS FEED AREA
=================================-->

    <!--================================
    START COUNTER UP AREA
=================================-->
    <!--================================
    END COUNTER UP AREA
=================================-->


    <!--================================
    END COUNTER UP AREA
=================================-->

    <!--================================
    START SELL BUY
=================================-->
    <section class="proposal-area">

        <!-- start container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--left bgimage">
                        <div class="bg_image_holder">
                            <img src="images/bbg.png" alt="prop image">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon ">
                                <img src="images/buy.png" alt="Buy icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Advertise Your Products Or Services</h1>
                                
                            </div>
                            <a href="signup.php" class="btn--round btn btn--lg btn--white">Become a Seller</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>

                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--right">
                        <div class="bg_image_holder">
                            <img src="images/sbg.png" alt="this is magic">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon">
                                <img src="images/sell.png" alt="Sell icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Looking For Products Or Services?</h1>
                                
                            </div>
                            <a href="all-products.php" class="btn--round btn btn--lg btn--white">Start Browsing</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>
            </div>
        </div>
        <!-- start container-fluid -->
    </section>
    <!--================================
    END SELL BUY
=================================-->

    <!--================================
    START TESTIMONIAL
=================================-->
    <!--================================
    END TESTIMONIAL
=================================-->

    <!--================================
    START LATEST NEWS
=================================-->
    <!--================================
    END LATEST NEWS
=================================-->

    <!--================================
    START SPECIAL FEATURES AREA
=================================-->
    <!--================================
    END SPECIAL FEATURES AREA
=================================-->

    <!--================================
    START CALL TO ACTION AREA
=================================-->
    
    <!--================================
    END CALL TO ACTION AREA
=================================-->
<?php

require "footer.php";

?>

   