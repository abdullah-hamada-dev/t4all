<?php 
    require_once("includes/common.php");

    $itemStatus = "Added to cart";

    if(isset($_GET['id'])){
        $item_id = $_GET['id'];
        $user_id = $_SESSION['user_id'];
        $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('" . $user_id . "', '". $item_id ."', '". $itemStatus ."')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header("location: products.php");
    }


?>