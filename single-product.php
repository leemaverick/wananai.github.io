<?php

require "header.php";

?>
<title>Product/Service</title>
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
                            <li>
                                <a href="all-products.php">Products & Services</a>
                            </li>
                            <li class="active">
                                <a href="category-grid.php">Category</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Product/Service Title</h1>
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


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc single-product-desc2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview item-preview2">
                        <div class="prev-slide">
                            <img src="images/placeholder1s.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                        </div>

                        <div class="item__preview-thumb">
                            <div class="item-action">
                                <div class="action-btns">
                                    <a href="#" class="btn btn--round btn--lg">Contact Seller</a>
                                    
                                </div>
                            </div>
                            <!-- end /.item__action -->
                        </div>
                        <!-- end /.item__preview-thumb-->

                        <div class="tab tab2">
                            <div class="item-navigation">
                                <ul class="nav nav-tabs nav--tabs2">
                                    <li>
                                        <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Item Details</a>
                                    </li>
                                    <li>
                                        <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Comments </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.item-navigation -->

                            <div class="tab-content">
                                <div class="tab-pane product-tab fade show active" id="product-details">
                                    <h1>Product/Service</h1>
                                    <p>An online society designed to connect agri-businesses creating an information sharing and marketing platform sorely dedicated to improving productivity.</p>

                                    <div class="item_social_share">
                                        <p>
                                            <img src="images/svg/share.svg" alt="This is share svg">
                                            <span>Share this item</span>
                                        </p>

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
                                        <!-- end /.social-->

                                    </div>
                                </div>
                                <!-- end /.tab-content -->

                                <div class="tab-pane product-tab fade" id="product-comment">
                                    <div class="thread">
                                        <ul class="media-list thread-list">
                                            <!-- end single comment thread /.comment-->

                                            <!-- end single comment thread /.comment-->

                                            <!-- end single comment thread /.comment-->

                                            <!-- end single comment thread /.comment-->
                                        </ul>
                                        <!-- end /.media-list -->

                                        <!-- end /.comment pagination area -->

                                        <div class="comment-form-area">
                                            <h4>Leave a comment</h4>
                                            <!-- comment reply -->
                                            <div class="media comment-form">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/avatar.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </div>
                                        <!-- end /.comment-form-area -->
                                    </div>
                                    <!-- end /.comments -->
                                </div>
                                <!-- end /.product-comment -->
                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.item-info -->
                    </div>
                    <!-- end /.item-preview-->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>
                                    <sup>$</sup>
                                    <span>amount</span>
                                </h1>
                            </div>
                            <div class="purchase-button">
                                <a href="#" class="btn btn--lg btn--round">Contact Seller</a>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->

                       

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <ul class="infos">
                                <li>
                                    <p class="data-label">Posted</p>
                                    <p class="info">xx/xx/xxxx</p>
                                </li>
                                <li>
                                    <p class="data-label">Updated</p>
                                    <p class="info">xx/xx/xxxx</p>
                                </li>
                                <li>
                                    <p class="data-label">Location</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Delivery</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Quantity</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Description</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Tags</p>
                                    <p class="info">
                                        <a href="#">???</a>,
                                        <a href="#">???</a>,
                                        <a href="#">???</a>,
                                        
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.aside -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

    
    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->


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
