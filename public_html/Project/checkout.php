<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");
is_logged_in(true);
$results = [];
$user_id = get_user_id();
$db = getDB();
$stmt = $db->prepare("SELECT p.id as product_id, name, image, c.desired_quantity, c.id as cart_id, c.unit_price, p.unit_price as price, (c.unit_price * c.desired_quantity) as subtotal FROM Cart c JOIN Products p on c.product_id = p.id WHERE c.user_id = :uid and c.desired_quantity > 0");
try {
    $stmt->execute([":uid" => $user_id]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
$cart_total = 0;
if (isset($_POST["money_received"]) && ($_POST["payment_method"]) && ($_POST["fname"]) && ($_POST["lname"]) && ($_POST["address"]) && ($_POST["apart"]) && ($_POST["city"]) && ($_POST["state"]) && ($_POST["country"]) && ($_POST["zip"])) {
    //session_start();
    $user_id = get_user_id();
    $full_address = se($_POST, "full_address", "", false);
    $payment_method = se($_POST, "payment_method", "", false);
    $money_recieved = se($_POST, "money_recieved", "", false);
    if (empty($money_received)) {
        flash("Please enter the amount", "warning");
        return;
    }
    $payment_method = se($_POST, "payment_method", "", false);
    if (empty($payment_method)) {
        flash("Please select payment method", "warning");
        return;
    }
    $fname = se($_POST, "fname", "", false);
    if (empty($fname)) {
        flash("Please enter first name", "warning");
        return;
    }
    $lname = se($_POST, "lname", "", false);
    if (empty($lname)) {
        flash("Please enter last name", "warning");
        return;
    }
    $address = se($_POST, "address", "", false);
    if (empty($address)) {
        flash("Please enter address", "warning");
        return;
    }
    $city = se($_POST, "city", "", false);
    if (empty($city)) {
        flash("Please enter city", "warning");
        return;
    }
    $state = se($_POST, "state", "", false);
    if (empty($state)) {
        flash("Please select state", "warning");
        return;
    }
    $country = se($_POST, "country", "", false);
    if (empty($country)) {
        flash("Please select country", "warning");
        return;
    }
    $zip = se($_POST, "zip", "", false);
    if (empty($zip)) {
        flash("Please enter zipcode", "warning");
        return;
    } else if (isset($_POST["money_received"]) || ($_POST["payment_method"]) || ($_POST["fname"]) || ($_POST["lname"]) || ($_POST["address"]) || ($_POST["apart"]) || ($_POST["city"]) || ($_POST["state"]) || ($_POST["country"]) || ($_POST["zip"])) {
        if (empty($_POST["apart"])) {
            $full_address = join(" , ", [$_POST["address"], $_POST["city"], $_POST["state"], $_POST["country"], $_POST["zip"]]);
        }
        if (!empty($_POST["apart"])) {
            $full_address = join(" , ", [$_POST["address"], $_POST["apart"], $_POST["city"], $_POST["state"], $_POST["country"], $_POST["zip"]]);
        }
    }
    $isValid = true;
    $errors = [];
    error_log("cart data: " . var_export($results, true));
    foreach ($results as $products) {
        if ((int)se($products, "unit_price", 0, false) != (int)se($products, "price", 0, false)) {
            array_push($errors, "Invalid unit_price");
            $isValid = false;
        }
        if ((int)se($products, "stock", 0, false) >= (int)se($products, "desired_quantity", 0, false)) {
            array_push($errors, "Not available in stock. You may have to go back to the Cart and choose a different product.");
            flash($name,"This product is out of stock");
            $isValid = false;
        }
        $cart_total += (int)se($products, "subtotal", 0, false);
    }
    if ($cart_total != (int)se($_POST, "money_received", 0, false)) {
        array_push($errors, "Cart Total is incorrect");
        $isValid = false;
    }
    error_log("req: " . var_export($cart_total, true));
    flash(join("<br>", $errors), "warning");
    if ($isValid) {
        $order_id = Orders(get_user_id(), $cart_total, $full_address, $payment_method);
        error_log("order id $order_id");
        flash("Order will be processes", "warning");
        if ($order_id > 0) {
            Order_Items(get_user_id(), $order_id);
            //Deleting from cart
            $remove = $db->prepare("DELETE FROM `Cart` WHERE user_id = ?");
            $remove->execute([get_user_id()]);
            flash("Your items in your Cart have been deleted");
        } else {
            flash("Error creating order", "danger");
        }
    }
}
function Orders($user_id, $total_price, $full_address, $payment_method)
{
    error_log("doing order: $user_id, $total_price, $full_address, $payment_method");
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Orders (user_id, total_price, address, payment_method) VALUES (:uid, :tp, :a , :pm) ");
    try {
        $stmt->execute([":uid" => $user_id, ":tp" => $total_price, ":a" => $full_address, ":pm" => $payment_method]);
        return $db->lastInsertId();
    } catch (PDOException $e) {
        error_log("Error adding items to Order_Items table: " . var_export($e->errorInfo, true));
        flash("ORDER ERROR", "danger");
    }
    return false;
}
?>
<div class="container-fluid">
    <center>
        <h1>Checkout Page</h1>
    </center>
    <form method="POST">
        <div class="row">
            <div class="col">
                <h3 id="noflex" style="margin-left: 10px; margin-top: 10px;">Shipping Address</h3>
                <label style="text-align:left; margin-left: 30px; margin-top: 10px; width:100%;" class="form-label">
                    First Name: <input type="text" name="fname" placeholder="First Name" style="width:20%">
                    <span class="error"></span>
                    <br><br>
                    Last Name: <input type="text" name="lname" placeholder="Last Name" style="width:20%">
                    <span class="error"></span>
                    <br><br>
                    Address: <input type="text" name="address" placeholder="Address" style="width:30%">
                    <span class="error"></span>
                    <br><br>
                    Apartment, suite, etc: <input type="text" name="apart" placeholder="Apartment No." style="width:10%">
                    <span class="error"></span>
                    <br><br>
                    City: <input type="text" name="city" placeholder="City" style="width:20%">
                    <span class="error"></span>
                    <br><br>
                    State: <select name="state" placeholder="State" style="width:20%">
                        <span class="error"></span>
                        <option value=" ">Select</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                    <br><br>
                    Country: <input type="text" name="country" placeholder="United States" style="width:20%">
                    <span class="error"></span>
                    <br><br>
                    Zip Code: <input type="text" name="zip" placeholder="Zip Code (5 digits)" style="width:20%">
                    <span class="error"></span>
                    <br><br>
                </label>
                <div class="col">
                    <h3 id="noflex" style="margin-left: 40px; margin-top: 10px;">Payment Method</h3>
                    <label style="text-align:left; margin-left: 10px; margin-top: 10px;">
                        Payment Method:
                        <input type="radio" name="payment_method" value="Visa"> Visa
                        <input type="radio" name="payment_method" value="Cash"> Cash
                        <input type="radio" name="payment_method" value="MasterCard"> MasterCard
                        <input type="radio" name="payment_method" value="Paypal"> Paypal
                        <br><br>
                        Total Payment: <input type="number" name="money_received" />
                        <br><br>
                    </label>
                </div>

                <h3 id="noflex" style="margin-left: 40px; margin-top: 10px;">Review items</h3>
                <table class="table text-light" style="margin-left: 60px; width: 60%;">
                    <?php global $order_total; ?>
                    <?php global $total; ?>
                    <?php global $temp_id; ?>
                    <?php global $temp_quantity; ?>
                    <?php global $temp_cost; ?>
                    <?php $temp_quantity = 0; ?>
                    <?php foreach ($results as $index => $record) : ?>
                        <?php if ($index == 0) : ?>
                            <thead>
                                <tr>
                                    <th width="120px">Product</th>
                                    <th width="10%">Quantity</th>
                                    <th width="12%">Price</th>
                                    <th width="13%">Total</th>
                                </tr>
                            </thead>
                            <thead>
                                <?php foreach ($record as $column => $value) : ?>
                                    <!--<th><?php se($column); ?></th>-->
                                    <!-- column names "header"-->

                                <?php endforeach; ?>
                            </thead>
                        <?php endif; ?>
                        <tr>
                            <?php foreach ($record as $column => $value) : ?>
                                <!-- for each row-->
                                <?php if ($column == "product_id") : ?>
                                    <?php $temp_id = $value; ?>
                                <?php endif; ?>
                                <?php if ($column == "name") : ?>
                                    <?php $temp_quantity = $value; ?>
                                    <td>
                                        <a href="product_details.php?id=<?php se($temp_id, "id"); ?>"><?php echo $value ?></a>
                                    </td>
                                <?php endif; ?>
                                <?php if ($column == "unit_price") : ?>
                                    <?php $temp_cost = $value ?>
                                    <td><?php echo "$", $value ?></td>
                                <?php endif; ?>
                                <?php if ($column == "desired_quantity") : ?>
                                    <?php $temp_quantity = $value; ?>
                                    <td><input class="form-control" type="number" id="lname" name="quantity" value="<?php echo $value; ?>" onchange="update_quantity(event,'<?php se($temp_id); ?>')" /></td>
                                <?php endif; ?>
                                <!--<?php se($value, null, "N/A"); ?>  
                        <?php endforeach; ?>
                    <?php $total = $temp_quantity * $temp_cost; ?> <!calculating total for each item  -->
                                <?php $order_total = $order_total + $total; ?>
                                <td><?php echo "$", $total ?></td>
                            <?php endforeach; ?>
                            <?php if ($temp_quantity == 0) : ?>
                                <h5 class="text" style="text-align:center">Your cart is empty</h5>
                            <?php endif; ?>
                </table>
                <div class="row">
                    <div class="col">
                        <?php if ($temp_quantity > 0) : ?>
                            <h3 style="text-align:center;"><u>Summary</u></h3>
                            <h5 style="text-align:center; ">
                                <?php echo "Cart Total :" ?>
                                <?php echo "$", $order_total ?></h5>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align:center;">
                <h2 style="text-align:center;">
                    <input type="hidden" name="cart_total" value="<?php echo $cart_total; ?>">
                </h2>
            </div>
        </div>
        <input type="submit" value="Complete Purchase"/>
        <a href="<?php echo get_url('order_confirm.php');?>">Confirm</a>

    </form>
</div>


<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>