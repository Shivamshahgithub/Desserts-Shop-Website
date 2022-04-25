<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
$user_id = get_user_id();
$db = getDB();
//$desired_quantity = "desired_quantity";
if (!is_logged_in()) {
   //this will redirect to login and kill the rest of this script (prevent it from executing)
   flash("You must be logged in to access this page", "warning");
   die(header("Location: login.php"));
}

//add to cart stuff//
if (isset($_POST["add"])){
    $product_id = (int)se($_POST, "product_id", 0, false);
    $desired_quantity = (int)se($_POST, "desired_quantity", 0, false);
    if ($product_id > 0 && $desired_quantity > 0) {
        $query = "INSERT INTO Cart (product_id, desired_quantity, user_id) VALUES(:pid, :dq, :uid) ON DUPLICATE KEY UPDATE desired_quantity = desired_quantity + :dq";
        $db = getDB();
        //note adding to cart doesn't verify price or quantity
        $stmt = $db->prepare($query);
        $stmt->bindValue(":pid", $product_id, PDO::PARAM_INT);
        $stmt->bindValue(":dq", $desired_quantity, PDO::PARAM_INT);
        $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
        try {
            $stmt->execute();
            flash("Product added to cart");
        } catch (PDOException $e) {
            error_log("Add to cart error: " . var_export($e, true));
            flash("Error adding product to cart");
        }
    }
}



//delete cart stuff//
if (isset($_POST["delete"])){
    $user_id = get_user_id();
    $cart_id = se($_REQUEST, "cart_id", 0, false);
    if ($user_id > 0 && $cart_id > 0) {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM Cart where id = :id and :uid");
        try {
            //added user_id to ensure the user can only delete their own items
            $stmt->execute([":id" => $cart_id, ":uid" => $user_id]);
            $cartesponse["status"] = 200;
            $cartesponse["message"] = "Deleted line product";
            http_response_code(200);
        } catch (PDOException $e) {
            error_log("Error deleting line product: " . var_export($e, true));
            $cartesponse["message"] = "Error deleting product";
        }
    }
}
//get cart stuff//
/*
if ($user_id > 0) {
    $db = getDB();
    $stmt = $db->prepare("SELECT name, c.id as cart_id, product_id, desired_quantity, cost, (cost*desired_quantity) as subtotal FROM Cart c JOIN Products i on c.product_id = i.id WHERE c.user_id = :uid");
    try {
        $stmt->execute([":uid" => $user_id]);
        $cartesults = $stmt->fetchAll(PDO::FETCH_ASSOC);
        http_response_code(200);
        if ($cartesults) {
            flash("Retrieved cart");
            $cartesponse["data"] = $cartesults;
        } else {
            flash("No products in cart");
            $cartesponse["data"] = [];
        }
    } catch (PDOException $e) {
        error_log("Error fetching cart" . var_export($e, true));
    }
} else {
   flash("You must be logged in to fetch your cart");
}
purchase cart
        $total_cost = 0;
        foreach ($cartesults as $cartow) {
            $total_cost += (int)se($cartow, "subtotal", 0, false);
        }
        if ($balance >= $total_cost) {
            //can purchase
            $db->beginTransaction();
            $stmt = $db->prepare("SELECT max(order_id) as order_id FROM OrderHistory");
            $next_order_id = 0;
            //get next order id
            try {
                $stmt->execute();
                $cart = $stmt->fetch(PDO::FETCH_ASSOC);
                $next_order_id = (int)se($cart, "order_id", 0, false);
                $next_order_id++;
            } catch (PDOException $e) {
                error_log("Error fetching order_id: " . var_export($e));
                $db->rollback();
            }
            //deduct product stock (used to determine if out of stock as it'll fail with a constraint violation)
            if ($next_order_id > 0) {
                $stmt = $db->prepare("UPDATE Products 
                set stock = stock - (select IFNULL(desired_quantity, 0) FROM Cart WHERE product_id = Products.id and user_id = :uid) 
                WHERE id in (SELECT product_id from Cart where user_id = :uid)");
                try {
                    $stmt->execute([":uid" => $user_id]);
                } catch (PDOException $e) {
                    error_log("Update stock error: " . var_export($e, true));
                    $cartesponse["message"] = "At least one of your items is low on stock and is unable to be purchased";
                    $db->rollback();
                    $next_order_id = 0; //using as a controller
                }
            }
            //map cart to order history
            if ($next_order_id > 0) {
                $stmt = $db->prepare("INSERT INTO OrderHistory (product_id, user_id, quantity, cost, order_id) 
                SELECT product_id, user_id, Cart.desired_quantity, cost, :order_id FROM Cart JOIN Products on Cart.product_id = Products.id
                 WHERE user_id = :uid");
                try {
                    $stmt->execute([":uid" => $user_id, ":order_id" => $next_order_id]);
                } catch (PDOException $e) {
                    error_log("Error mapping cart data to order history: " . var_export($e, true));
                    $db->rollback();
                    $next_order_id = 0; //using as a controller
                }
            }
            //update inventory
            //TBD
            //clear the user's cart now that the process is done
            if ($next_order_id > 0) {
                $stmt =  $db->prepare("DELETE from Cart where user_id = :uid");
                try {
                    $stmt->execute([":uid" => $user_id]);
                } catch (PDOException $e) {
                    error_log("Error deleting cart: " . var_export($e, true));
                    $db->rollback();
                    $next_order_id = 0; // using as a controller
                }
            }
            if ($next_order_id) {

                //deduct points
                $db->commit(); //confirm pending changes
                $cartesponse["status"] = 200;
                http_response_code(200);
                $cartesponse["message"] = "Purchase complete";
            } else {
                $cartesponse["status"] = 200;
                http_response_code(200);
            }
        } else {
            $cartesponse["status"] = 402;
            http_response_code(200);
            $cartesponse["message"] = "You can't afford to purchase your cart";
        }

*/

if(isset($_POST["update"])){
    $desired_quantity = (int)se($_POST, "desired_quantity", 1, false);
   if ($desired_quantity>0){
       $stmt = $db->prepare("UPDATE Cart set desired_quantity = :q where product_id = :pid");
       $cart = $stmt->execute([":pid"=>$_POST["cartId"], ":q"=>$_POST["desired_quantity"]]);
       if($cart){
           flash("Updated desired_quantity", "success");
       }
   } elseif ($desired_quantity==0 || $desired_quantity<0){
       $stmt = $db->prepare("DELETE FROM Cart where product_id = :pid");
       $cart = $stmt->execute([":pid"=>$_POST["cartId"]]);
       if($cart){
           flash("Product deleted from cart", "success");
       }
   }
}

if(isset($_POST["delete"])){
   $stmt = $db->prepare("DELETE FROM Cart where product_id = :pid");
   $cart = $stmt->execute([":pid"=>$_POST["cartId"]]);
   if($cart){
       flash("Product deleted from cart", "success");
   }
}
if(isset($_POST["clear"])){
   $stmt = $db->prepare("DELETE FROM Cart where user_id = :id");
   $cart = $stmt->execute([":id"=>get_user_id()]);
   if($cart){
       flash("Cart cleared", "success");
   }
}
$db = getDB();
$cartesults = [];
if (!isset($user_id)) {
   $user_id = get_user_id();
}
error_log("Cart");
$stmt = $db->prepare("SELECT p.id as product_id, name, image, c.desired_quantity, c.id as cart_id, c.unit_price, (c.unit_price * c.desired_quantity) as subtotal FROM Cart c JOIN Products p on c.product_id = p.id WHERE c.user_id = :uid and c.desired_quantity > 0");
$stmt->execute([":uid"=>get_user_id()]);
try {
   $stmt->execute([":uid" => $user_id]);
   $cart = $stmt->fetchAll(PDO::FETCH_ASSOC);
   if ($cart) {
       $cartesults = $cart;
   }
} catch (PDOException $e) {
   error_log(var_export($e, true));
   flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<div class="container-fluid">
  <h5>Cart</h5>
  <?php global $cart_total;?>
   <div class="list-group">
       <?php if($cartesults && count($cartesults) > 0):?>
           <?php $sum=0;?>
           <div class="list-group-item">
               <div class="row">
                   <div class="col">
                      Product
                   </div>
                   <div class="col">
                       Quantity
                   </div>
                   <div class="col">
                       Price
                   </div>
                   <div class="col">
                       Subtotal
                   </div>
                   <div class="col">
                       Actions
                   </div>
               </div>
           </div>
           <?php foreach($cartesults as $cart):?>
           <div class="list-group-item">
               <form method="POST">
               <div class="row">
                   <div class="col">
                       <a href="product_detail.php?id=<?php se($cart, "product_id") ?>"> <?php se($cart, "name")?></a>
                       <!--<?php echo $cart["name"];?> -->
                   </div>
                   <div class="col">
                       <input type="number" min="0" name="desired_quantity" value="<?php echo $cart["desired_quantity"];?>"/>
                       <input type="hidden" name="cartId" value="<?php echo $cart["product_id"];?>"/>
               </div>
               <div class="col">
                   <div class="col">
                       <?php echo $cart["unit_price"];?>
                   </div>    
                   <?php
                   $subtotal = $cart["subtotal"];
                   $cart_total= $cart_total+$subtotal;
                   $cart["subtotal"]; ?>
                   </div>
                   <div class="col">
                       <!-- form split was on purpose-->
                       <input type="submit" class="btn btn-outline-dark" name="update" value="Quantity Update"/>
                       </form>
                       <form method="POST">
                           <input type="hidden" name="cartId" value="<?php echo $cart["product_id"];?>"/>
                           <input type="submit" class="btn btn-outline-dark" name="delete" value="Remove"/>
                       </form>
                   </div>
               </div>
           </div>
           <?php endforeach;?>
           <div class = "card-footer">
               <h2>Cart Summary</h2>
               <div class="list-group-item">
                   <form method = "POST">
                       <h5>Cart Total </h5>
                       <?php echo $cart_total?>
                       <div class = "col">
                       </div>      
                       <div class = "row">
                               <input type="hidden" name="cartId" value="<?php echo $cart["product_id"];?>"/>
                               <input type="submit" class="btn btn-outline-dark" name="clear" value="Clear Cart"/>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       <?php else:?>
       <div class="list-group-item">
           No items in cart
       </div>
       <?php endif;?>
       </div>
   </div>
   <?php
?>
<?php require(__DIR__ . "/../../partials/flash.php");
require(__DIR__ . "/../../partials/footer.php");
?>