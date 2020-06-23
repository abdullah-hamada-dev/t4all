<?php
        require_once('includes/common.php');
        if (!isset($_SESSION['email'])){
            header("location: index.php");
        }
        
        
        $user_id = $_SESSION["user_id"];
        $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $item_id = $row["item_id"];
            $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }

        header("location: index.php");
    ?>