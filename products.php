<?php   require_once('includes/common.php');
        require_once('includes/header.php'); 
        require_once("includes/check-if-added.php") ?>

    <div class="container">
    <div id="shop-img">
        <h4>Shop</h4>
        <a href="index.php">Home</a>
         <p> > Shop</p>
    </div>
    </div>

    <div class="container fix-content"> <!--Container Start-->
        <div class="row"><!--Row Female start-->
            <div id="female-section">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-1.jpg" alt="">
                            <div class="caption">
                                <h3>Brown paperbag </h3>
                                <p>Price: 4900 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(1)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-2.jpg" alt="">
                            <div class="caption">
                                <h3>Dark yellow lace cut out </h3>
                                <p>Price: 3500 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(2)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-3.jpg" alt="">
                            <div class="caption">
                                <h3>Khaki utility boiler </h3>
                                <p>Price: 5300 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(3)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-4.jpg" alt="">
                            <div class="caption">
                                <h3>Blue utility pinafore</h3>
                                <p>Price: 2950 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(4)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-5.jpg" alt="">
                            <div class="caption">
                                <h3>Yellow button front tea</h3>
                                <p>Price: 1500 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(5)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail img-fix">
                            <img src="img/item-6.jpg" alt="">
                            <div class="caption">
                                <h3>Floral Stripe</h3>
                                <p>Price: 1800 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(6)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
            </div><!--end of female section-->
        </div><!--Row Female end-->
        <div class="row"><!--Row male start-->
            <div id="male-section">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-7.jpg" alt="">
                            <div class="caption">
                                <h3>H&m</h3>
                                <p>Price: 2700 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(7)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-8.jpg" alt="">
                            <div class="caption">
                                <h3> Classic Shirt  </h3>
                                <p>Price: 1800 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(8)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-9.jpg" alt="">
                            <div class="caption">
                                <h3>Knitted Stripe </h3>
                                <p>Price: 2500 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(9)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-10.jpg" alt="">
                            <div class="caption">
                                <h3>Leopard Print</h3>
                                <p>Price: 2100 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(10)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="img/item-11.jpg" alt="">
                            <div class="caption">
                                <h3>Dagger Oversized </h3>
                                <p>Price: 3999 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(11)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail img-fix">
                            <img src="img/item-12.jpg" alt="">
                            <div class="caption">
                                <h3>Stylish Tshirt</h3>
                                <p>Price: 1280 Rs</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login-main.php" role="button" class="btn btn-block btn-product">Buy Now</a></p>
                                <?php
                                } else {
                                // Check whether the item is added to cart or not.
                                if (check_if_added_to_cart(12)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-product">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                    </div> 
                </div>
            </div><!--end of male section-->
        </div><!--Row male end-->
    </div><!--Container End-->


<?php require_once('includes/footer.php'); ?>