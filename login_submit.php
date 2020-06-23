<?php 
    require_once('includes/common.php');


    //Store Form Values Into Variables
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Secure The Variables
    mysqli_real_escape_string($con,$email);
    mysqli_real_escape_string($con,$password);
    $password = MD5($password);


    // Code To Check If The User Details Correct Or No 
    if (isset($email) && isset($password)){
        $loginQuery = "SELECT * FROM users WHERE email='".$email."' AND password='".($password)."'";
        $result = mysqli_query($con,$loginQuery);
        $num = mysqli_num_rows($result);
        if ($num == 0) {

            header('Location: login-main.php?user_error=<div class= "alert alert-danger" > You Have Entered Wrong Details </div>');
        }else{
            $row = mysqli_fetch_array($result);
            $_SESSION['email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
             header('Location: products.php'); 
        }
    
    }
?>
