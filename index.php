<?php include "database_connect.php";?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME || LP Online </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include "include/header.php";?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <?php 
                            $df="SELECT * FROM `category`";
                            $co=$con->query($df);
                            while($cat=$co->fetch_assoc())
                            {
                                ?>
                                <li><a href="shop-grid.php?c_id=<?php echo $cat[c_id];?>"><?php echo $cat[name];?></a></li>
                                <?php
                            }
                            ?> 
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+91 90098 53539</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    
                    <img src="img/hero/banner.jpg" alt="Girl in a jacket" width="100%" height="300">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin 1-->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Daily Deals Product</h2>
                    </div>
        
                    <div class="row">
                         <div class="categories__slider owl-carousel">

                 <?php
                    $re="SELECT * FROM `product` WHERE `unq_id`='dd'";
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    ?>
                        <?php
                        while($pr=$dcr->fetch_assoc())
                        {
                            ?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="images/<?php echo $pr[img1];?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><?php echo $pr[name];?></a></h6>
                                    <p style="text-decoration: line-through;">
                                   <?php echo $pr[mrp];?>/-
                                    </p>
                                    <h5><?php echo $pr[dp];?>/-</h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End 1-->

   <!-- Categories Section Begin 2 -->
 <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Printing Offers</h2>
                    </div>
        
                    <div class="row">
                         <div class="categories__slider owl-carousel">

                 <?php
                    $re="SELECT * FROM `product` WHERE `unq_id`='po'";
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    ?>
                        <?php
                        while($pr=$dcr->fetch_assoc())
                        {
                            ?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="images/<?php echo $pr[img1];?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><?php echo $pr[name];?></a></h6>
                                    <p style="text-decoration: line-through;">
                                   <?php echo $pr[mrp];?>/-
                                    </p>
                                    <h5><?php echo $pr[dp];?>/-</h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>   
    <!-- Categories Section End 2-->
    
      <!-- Categories Section Begin 5 -->
 <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Top Product</h2>
                    </div>
        
                    <div class="row">
                         <div class="categories__slider owl-carousel">

                 <?php
                    $re="SELECT * FROM `product` WHERE `unq_id`='dd'";
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    ?>
                        <?php
                        while($pr=$dcr->fetch_assoc())
                        {
                            ?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="images/<?php echo $pr[img1];?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><?php echo $pr[name];?></a></h6>
                                    <p style="text-decoration: line-through;">
                                   <?php echo $pr[mrp];?>/-
                                    </p>
                                    <h5><?php echo $pr[dp];?>/-</h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>   
    <!-- Categories Section End 5-->
    
     <!-- Categories Section Begin 3 -->
 <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Home Appliances Products</h2>
                    </div>
        
                    <div class="row">
                         <div class="categories__slider owl-carousel">

                 <?php
                    $re="SELECT * FROM `product` WHERE `unq_id`='ha'";
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    ?>
                        <?php
                        while($pr=$dcr->fetch_assoc())
                        {
                            ?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="images/<?php echo $pr[img1];?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><?php echo $pr[name];?></a></h6>
                                    <p style="text-decoration: line-through;">
                                   <?php echo $pr[mrp];?>/-
                                    </p>
                                    <h5><?php echo $pr[dp];?>/-</h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>   
    <!-- Categories Section End 3-->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                    <img src="img/hero/banner.jpg" alt="Girl in a jacket" width="100%" height="300">                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                    <img src="img/hero/1.jpg" alt="Girl in a jacket" width="100%" height="300">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

</br>
    <!-- Categories Section Begin 4 -->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>All Products</h2>
                    </div>
                    <?php
                    $re="SELECT * FROM `product` WHERE `c_id`='1'";
                    $dcr=$con->query($re);
                    $bhu=$dcr->num_rows;
                    
                    
                    
                    ?>
                    <!--<div class="filter__item">-->
                    <!--    <div class="row">-->
                            
                    <!--        <div class="col-lg-4 col-md-4">-->
                    <!--            <div class="filter__found">-->
                    <!--                <h6><span><?php echo $bhu;?></span> Products found</h6>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="row">
                        <?php
                        
                        while($pr=$dcr->fetch_assoc())
                        {
                            ?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="images/<?php echo $pr[img1];?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="shop-details.php?p_id=<?php echo $pr[p_id];?>"><?php echo $pr[name];?></a></h6>
                                    <p style="text-decoration: line-through;">
                                   <?php echo $pr[mrp];?>/-
                                    </p>
                                    <h5><?php echo $pr[dp];?>/-</h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End 4-->



    <!-- Footer Section Begin -->
    <?php
    include "include/footer.php";?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>