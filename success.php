<?php require "includes/common.php"; 

    if (!isset($_SESSION['email'])){
        header("location: index.php");
    }
    
    require "includes/header.php"; 
    
    $user_id = $_SESSION['user_id'];
    $item_ids = $_GET['itemsid'];

    // Change the order status to confirmed
    $confirmQuery = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids . ") and status='Added to cart'";
    mysqli_query($con, $confirmQuery) or die($mysqli_error($con));
      
?>

    <div class="container content"> <!--container start-->
        <div class="jumbotron">
            <h1>Your oreder is confirmed!</h1>
            <p>Thank you for shopping with us. <a  href='confirm.php?itemsid=" . $id . "'> ​Click here​ </a> ​to purchase any other item.</p>
        </div>
    </div><!--container end-->
       
<?php require "includes/footer.php"; ?>
