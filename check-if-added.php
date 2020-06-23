<?php

// Check if the product is added to cart. 
function check_if_added_to_cart($item_id) {
    $user_id = $_SESSION['user_id'];
    require("common.php");

    // Query To Check The Items From The Database
    $itemQuery = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $itemQuery) or die(mysqli_error($con));
    
// Check Number Of Rows
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>