<?php  
    require_once('includes/common.php');

    // Check if the user is logged in or no
    if (!isset($_SESSION['email'])){
        header("location: index.php");
    }

    $old_pass = $_POST['oldPassword'];
    $old_pass = mysqli_real_escape_string($con, $old_pass);
    $old_pass = MD5($old_pass);

    $new_pass = $_POST['newPassword'];
    $new_pass = mysqli_real_escape_string($con, $new_pass);
    $new_pass = MD5($new_pass);

    $confirm_pass = $_POST['confirmPassword'];
    $confirm_pass = mysqli_real_escape_string($con, $confirm_pass);
    $confirm_pass = MD5($confirm_pass);

    // Fetch the original password from the database
    $query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $origin_pass = $row['password'];


    // Check if the password and confirm password are match
    if ($new_pass != $confirm_pass) {
        header('Location: settings.php?error=<div class= "alert alert-danger" >The two passwords don\'t match</div>');
    } else {
        if ($old_pass == $origin_pass) {// update password if both are same
            $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
            mysqli_query($con, $query) or die($mysqli_error($con));
            header('Location: settings.php?error=<div class= "alert alert-success" >Password Updated Successfully</div>');
        } else
        header('Location: settings.php?error=<div class= "alert alert-danger" >Old Password Is Wrong</div>');
    }









?>