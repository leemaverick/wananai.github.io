<?php

require "header.php";

?>

<title>Category</title>
    <!--================================
        START SEARCH AREA
    =================================-->
    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="images/img2.jpg" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    <span>1,000+</span> products and services from our creative community</h3>
                            </div>
                            <div class="search__field">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="Search your products">
                                        <button class="btn btn--round" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Category</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->
    </section>
    <!--================================
        END SEARCH AREA
    =================================-->

    
    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products section--padding2">
        <!-- start container -->
        <div class="container">
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3">
                    <!-- start aside -->
                    <aside class="sidebar product--sidebar">
                        <div class="sidebar-card card--category">
                            <a class="card-title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Categories
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse1">
                                <ul class="card-content">
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Vegetables
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Cereals
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Poultry
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Livestock
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Herbs
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Nuts
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Agrochemicals
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Services
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Land
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Transport
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category-grid.php">
                                            <span class="lnr lnr-chevron-right"></span>Equipment
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--filter">
                            <a class="card-title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">
                                <h4>Filter Products
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse2">
                                <ul class="card-content">
                                    
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt2" class="" name="filter_opt">
                                            <label for="opt2">
                                                <span class="circle"></span>Recents Items</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>Popular Items</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt4" class="" name="filter_opt">
                                            <label for="opt4">
                                                <span class="circle"></span>Top Sellers</label>
                                        </div>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->

                        
                        <!-- end /.sidebar-card -->
                    </aside>
                    <!-- end aside -->
                </div>
                <!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <img src="images/placeholder1s.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.php" class="transparent btn--sm btn--round">View Item</a>
                                        
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="single-product.php" class="product_title">
                                        <h4>Product/Service Title</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/avatar.png" alt="author image">
                                            <p>
                                                <a href="author.php">Seller Name</a>
                                            </p>
                                        </li>
                                        <li class="out_of_class_name">
                                            <div class="sell">
                                               
                                            </div>
                                            <div class="rating product--rating">
                                                
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>$amount</span>
                                    </div>
                                    <a href="#">
                                        <span class="lnr lnr-map-marker"></span>Location</a>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->

                        
                        <!-- end /.col-md-4 -->
                    </div>
                </div>
                <!-- end /.col-md-9 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area categorised_item_pagination">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">
                                    <span class="lnr lnr-arrow-left"></span>
                                </a>
                                <a class="page-numbers current" href="#">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->

    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="images/img3.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Ready to Join Our Community!</h1>
                        <h4 class="text--white">Over 2,000 farmers and agribusinesses on wananai.com.</h4>
                        <a href="signup.php" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END CALL TO ACTION AREA
    =================================-->

  <?php

require "footer.php";

?>
