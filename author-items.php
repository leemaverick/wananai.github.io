<?php

require "header.php";

?>
<title>Seller Items</title>
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">All Items</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Seller Items</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START AUTHOR AREA
    =================================-->
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="images/user.png" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h4>Seller Name</h4>
                                    
                                </div>
                                <!-- end /.author -->

                                
                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-google-plus"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->

                                <div class="author-btn">
                                    <a href="#" class="btn btn--md btn--round">Contact Info</a>
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->
                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="author.php">Profile</a>
                                </li>
                                <li>
                                    <a class="active" href="author-items.php">Seller Items</a>
                                </li>
                                <li>
                                    <a href="author-reviews.php">Customer Reviews</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end /.author-menu -->

                        <div class="sidebar-card freelance-status">
                            <div class="custom-radio">
                                <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                <label for="opt1">
                                    <span class="circle"></span>Available for Freelance Work</label>
                            </div>
                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card message-card">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <div class="message-form">
                                <form action="#">
                                    <div class="form-group">
                                        <textarea name="message" class="text_field" id="author-message" placeholder="Your message..."></textarea>
                                    </div>

                                    <div class="msg_submit">
                                        <button type="submit" class="btn btn--md btn--round">send message</button>
                                    </div>
                                </form>
                                <p> Please
                                    <a href="login.php">sign in</a> to contact this seller.</p>
                            </div>
                            <!-- end /.message-form -->
                        </div>
                        <!-- end /.freelance-status -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Total Items</p>
                                <h3>0</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>Total Customers</p>
                                <h3>0</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>Ratings</p>
                                <div class="rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(0)</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->
                    </div>
                    <!-- end /.row -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter-bar clearfix filter-bar2">
                                <div class="filter__option filter--text pull-left">
                                    <p>
                                        <span></span>Seller Items</p>
                                </div>

                                <div class="pull-right">
                                    <div class="filter__option filter--dropdown">
                                        <a href="#" class="dropdown-trigger dropdown-toggle" id="drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                            <span class="lnr lnr-chevron-down"></span>
                                        </a>
                                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                            <li>
                                                <a href="category-grid.php">Vegetables
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Cereals
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Poultry
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Livestock
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Herbs
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Nuts
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Agrochemicals
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Services
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Land
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Transport
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Equipment
                                                    <span>0</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter__option filter--dropdown">
                                        <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                                            <span class="lnr lnr-chevron-down"></span>
                                        </a>
                                        <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                            <li>
                                                <a href="category-grid.php">Recent Items</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Popular Items </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Top Seller </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.pull-right -->
                            </div>
                            <!-- end filter-bar -->
                        </div>
                        <!-- end /.col-md-12 -->

                        <!-- start .col-md-6 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

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
                                        
                                    </ul>

                                    <p>An online society designed to connect agri-businesses creating an information sharing and marketing platform sorely dedicated to improving productivity.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>$amount</span>
                                        
                                    </div>

                                    
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <!-- start .col-md-6 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

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
                                        
                                    </ul>

                                    <p>An online society designed to connect agri-businesses creating an information sharing and marketing platform sorely dedicated to improving productivity.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>$amount</span>
                                        
                                    </div>

                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <!-- end /.col-md-6 -->
                    </div>
                    <!-- end /.row -->

                    <div class="pagination-area pagination--right">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">
                                    <span class="lnr lnr-arrow-left"></span>
                                </a>
                                <a class="page-numbers current" href="#/">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END AUTHOR AREA
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
                        <h4 class="text--white">Over 2,000 farmers and agribusinesses on wananai.com</h4>
                        <a href="signup.html" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
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