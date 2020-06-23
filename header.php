<?php require_once('common.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-4All Store</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--Main CSS File-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="navbar navbar-inverse navbar-fixed-top"><!--Navbar start-->
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if(!isset($_SESSION['email'])){  ?>
                <a href="index.php" class="navbar-brand logo">T-4All</a>
                <?php }else{?>
                <a href="products.php" class="navbar-brand logo">T-4All</a>
                <?php } ?>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['email'])){?>
                    <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php } else {  ?>
                    <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
                    <li><a href="login.php" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                    <?php  }  ?>
                </ul>
            </div>
            </div>
        </div><!--Navbar End-->
    </header>
    <!-- Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Login</h4>
            <p>Login To Purchase The Chill Style</p>
        </div>
        <div class="modal-body">
        <form action="login_submit.php" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-block ">Login</button>                        
        </form>
        </div>
        <div class="modal-footer">
        <div class="modal-style">Don't have an account? <a href="signup.php">Register Now</a></div>
        </div>
        </div>

    </div>
    </div>