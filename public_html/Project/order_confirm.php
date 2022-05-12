<?php
require(__DIR__."/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$result=[];
$result2=[];
$stmt = $db->prepare("SELECT total_price, address, payment_method FROM Orders where id = :id");
$stmt2 = $db->prepare("SELECT Order_Items.desired_quantity, Order_Items.unit_price, Products.name FROM Order_Items INNER JOIN Products ON Order_Items.product_id = Products.id WHERE Order_Items.order_id = :order_id");
$order_id = se($_GET, "id", -1, false);
$address = ["address"];
$payment_method = ["payment_method"];
$total_price = ["total_price"];
try {
    $stmt->execute([":id" => $order_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
        $address= $r["address"];
        $payment = $r["payment_method"];
        $total = $r["total_price"];
    }
    
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

try {
    $stmt2->execute([":order_id" => $order_id]);
    $m = $stmt2->fetchALL(PDO::FETCH_ASSOC);
    if ($m) {
        $result2 = $m;
    }
    
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<div class="container-fluid">
    <h1>Order Confirmation</h1>
    <div class="mb-3">
        <label class="form-label" for="thanks">Thank You for Your Purchase!</label>
    </div>
    <div class="mb-3">
        <label class="form-label" for="address">Address</label>
        <label class="form-control" for="country"><?php se($address);?></label>
    </div>
    <div class="mb-3">
        <label class="form-label" for="total">Total Price</label>
        <label class="form-control" for="total"><?php se($total_price);?></label>
    </div>
    <div class="mb-3">
        <label class="form-label" for="payment">Payment Method</label>
        <label class="form-control" for="country"><?php se($payment_method);?></label>
    </div>
    <?php foreach ($result2 as $product) : ?>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php se($product, "name"); ?></h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text">Unit Price: $ <?php se($product, "unit_price");?></p>
                        <div class="mb-4">
                            <label class="form-label" for="desired_quantity">Quantity <?php se($product, "desired_quantity"); ?> </label>
                        </div> 
                    </div>
                </div>
            </div>
    <?php endforeach; ?>
</div>