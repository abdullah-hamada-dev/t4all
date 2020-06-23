<?php 
        require_once("includes/common.php");
        
        if (isset($_SESSION['email'])) {
            header('location: products.php');
            }
        require_once("includes/header.php"); 
?>


<div class="container content">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
            <div class="panel panel-primary">
                <div class="panel-heading ">Login</div>
                <div class="panel-body">
                    <p class="text-warning">Login to make a purchase</p>
                    <form action="login_submit.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>                        
                    </form>
                    <?php echo $_GET['user_error']; ?> <!--Script To Echo Error -->
                </div>
                <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
            </div>
        </div>
    </div>
</div>
   

<?php require "includes/footer.php"; ?>
