<?php require "includes/common.php"; 

    if (!isset($_SESSION['email'])){
            header("location: index.php");
     }

    require "includes/header.php"; 

    //initilize user id from session 
    $user_id = $_SESSION['user_id'];
    $sum = 0;
    $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));

  
    
?> 

<div id="cart">
<div class="container content">
    <div class="row">

        <?php  if (mysqli_num_rows($result) == 0) {
             echo '<div class="col-md-6 col-md-offset-3">';
             echo '<div class="jumbotron"><h2>You Haven\'t Added Anything Yet</h2>';
             echo '<h4>Click <a class="remove_item_link" href="products.php">Here </a>To visit products page </h4></div>';

         } else { ?>
        <div class="col-sm-7">
            <h2>Check Out Your Order</h2>
        <table class="table table-striped">   
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name <th>
                    <th>Price</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php while( $row = mysqli_fetch_array($result)){
                     $sum+= $row["Price"];
                     $id .= $row["id"] . ", ";
                  
                     echo "<tr><td>" . "# " . $row["id"] . "</td><td>" . $row["Name"] ."</td><td>". "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                    }
                    $id = rtrim($id, ", ");
                    $shipping = 200 ;
                    $Gtotal = $sum + $shipping;
                    // echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-product'>Confirm Order</a></td></tr>";
                    ?>
            </tbody>
            
        </table>
        </div><!--End of table row-->
        <div class="col-sm-3 col-sm-offset-1">
            <div id="bill">
                <h2>Bill details</h2>
                <p>Subtotal :</p>
                <h5 class="sum"><?php echo $sum; ?> Rs</h5>
                <p class="shipping">Shipping :</p>
                <h5 class="sum"><?php echo $shipping; ?> Rs</h5>
                <h4 class="gtotal">Grand Total</h4>
                <h5 class="gtotal-p"><?php echo $Gtotal; ?> Rs</h5>
            </div>
            <a href='success.php?itemsid=" . $id . "' class='btn btn-cart btn-block'>Confirm Order</a>
            <!-- <a href="success.php?itemsid=$id" name="confirm" type="submit" class="btn-block btn-cart">Checkout</a> -->

    <?php } ?>

        </div>
        
    </div><!--End of row-->
</div><!--End of container-->
</div>
  
<?php require "includes/footer.php"; ?>
