<?php require "includes/common.php"; 

    if (!isset($_SESSION['email'])){
        header("location: index.php");
    }

    require "includes/header.php"; ?>

        <div class="container content">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> Change Password</h1>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password"  class="form-control" name="oldPassword"  placeholder="Old Password" >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="newPassword" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="confirmPassword" placeholder="Re Type Password">
                        </div>
                        <button type="submit" class="signup-btn">Change</button>
                        <?php
                        echo "<br><br>" .$_GET['error']." </b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
 
<?php require "includes/footer.php"; ?>
