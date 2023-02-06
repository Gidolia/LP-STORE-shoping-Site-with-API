<!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="Screenshot (122).jpg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
              
                <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <!--<li><a href="./shop-details.php">Shop Details</a></li>-->
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <!--<li><a href="./blog-details.php">Blog Details</a></li>-->
                    </ul>
                </li>
                <!--<li><a href="./blog.php">Blog</a></li>-->
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> lahariprinters.gwl@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> lahariprinters.gwl@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            
                            <div class="header__top__right__language">
                                <?php
                                //echo $_SESSION[mobile];
                                if(isset($_SESSION[mobile]))
                                {
                                 ?>
                                <div><i class="fa fa-user"></i> <?php echo $d_detail[name];?></div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                                <?php }else{ ?>
                                <a href="login.php"><i class="fa fa-user"></i> Login</a><?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="Screenshot (122).jpg" alt="" height="100px"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <!--<li><a href="./shop-details.php">Shop Details</a></li>-->
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <!--<li><a href="./blog-details.php">Blog Details</a></li>-->
                                </ul>
                            </li>
                            <!--<li><a href="./blog.php">Blog</a></li>-->
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <?php
                            $cart_sel="SELECT * FROM `product_cart` WHERE `c_mob`='$_SESSION[mobile]'";
                            $cart_que=$con->query($cart_sel);
                            
                            $cart_count=$cart_que->num_rows;
                            $cart_total=0;
                            while($cyop=$cart_que->fetch_assoc())
                            {
                                $er=$cyop[qty]*$cyop[a_d_dp_id];
                                $cart_total=$cart_total+$er;
                            }
                        ?>
                        <ul>
                            <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $cart_count;?></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span><?php echo $cart_total;?>/-</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>