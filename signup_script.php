<?php require_once('includes/common.php');

    // Store Values Into Variables
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact  = $_POST['contact'];
    $city  = $_POST['city'];
    $address  = $_POST['address'];

    // Secure The variables
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);
    $contact = mysqli_real_escape_string($con, $contact);
    $city = mysqli_real_escape_string($con, $city);
    $address = mysqli_real_escape_string($con, $address);

    // Use PHP Validation
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $regex_name  = "/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/"; 


    // Encrypt The Password Variable
    $password = MD5($password);


    // Query To Check If The Email Is Already Exist
    $emailQuery = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $emailQuery)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);


    // Inserting User Details If No Error 
    if ($num != 0) {
        $emailError = "<div class= 'alert alert-danger'>Email is already exist ! </div>";
        header('location: signup.php?email_error=' . $emailError);
      } else if (!preg_match($regex_email, $email)) {
        $emailError = "<div class= 'alert alert-danger'>Email is Not valid !</div>";
        header('location: signup.php?email_error=' . $emailError);
      }else if (!preg_match($regex_name,$name)){
        $nameError = "<div class= 'alert alert-danger'>Enter a Valid Name</div>";
        header('location: signup.php?name_error=' . $nameError);
      } else if (strlen($name) <= 3 ){
          $nameError = "<div class= 'alert alert-danger'>Name Is Too Short </div>";
          header('location: signup.php?name_error=' . $nameError);
      } else if ((strlen($password) < 8)) {
          $passwordError = "<div class= 'alert alert-danger'>Password Should Be More Than 8 characters </div>";
          header('location: signup.php?password_error=' . $passwordError);
      }else{
        $signupQuery = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" .($password). "','" . $contact . "','" . $city . "','" . $address . "')";
        mysqli_query($con, $signupQuery) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user_id;
        header("location: products.php");
      }



?>