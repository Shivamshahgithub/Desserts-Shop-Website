<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");
?>
<?php
        
        if(isset($_POST["submit"])){
            $store_rating = $_POST["rating"];
            if(isset($_POST["comment"])){
                $store_comment = $_POST["comment"];
                $store_user_id = $_POST["uid"];
                $store_product_id = $_POST["pid"];
            }
            //rating($store_product_id,$store_user_id,$store_rating,$store_comment);
        }
    $results = [];
    $results1 = [];
    $order_id = se($_GET, "id", 0, false);
    $db = getDB();
    $stmt = $db->prepare("SELECT id, user_id, total_price, address,created , payment_method FROM Orders WHERE id =:id ");
    try {
        $stmt->execute([":id"=> $order_id]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
    $db = getDB();
    $stmt = $db->prepare("SELECT Order_Items.id, Products.name, Products.description, Order_Items.order_id, Order_Items.product_id, Order_Items.desired_quantity , Order_Items.unit_price FROM Order_Items JOIN Products on Order_Items.product_id = Products.id WHERE Order_Items.order_id =:id ");
    try {
        $stmt->execute([":id" => $order_id]);
        $b = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($b) {
            $results1 = $b;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
?>
<div class="container-fluid">
    <h1 id ="noflex" >Order Detail</h1>
    <div class="row">  
        <h3 id ="noflex" style="margin-left: 20px;margin-top: 10px;" ><u>Orders Information</u></h3>
            <?php foreach ($results as $index => $record) : ?>
                <?php global $order_number; ?>
                <?php global $order_created; ?>
                <?php global $order_user_id; ?>
                <?php global $order_total_price; ?>
                <?php global $order_address; ?>
                <?php global $order_payment_method; ?>
                <?php foreach ($record as $column => $value) : ?>
                       <?php if($column == "id") :?>
                            <?php $order_number= $value ?>
                        <?php endif; ?>
                        <?php if($column == "user_id") :?>
                            <?php $order_user_id= $value ?>
                        <?php endif; ?>
                        <?php if($column == "created") :?>
                            <?php $order_created= $value ?>
                        <?php endif; ?>
                        <?php if($column == "total_price") :?>
                            <?php $order_total_price= $value ?>
                        <?php endif; ?>
                        <?php if($column == "address") :?>
                            <?php $order_address= $value ?>
                        <?php endif; ?>
                        <?php if($column == "payment_method") :?>
                            <?php $order_payment_method= $value ?>
                        <?php endif; ?>
                <?php endforeach; ?>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Order Number : ",$order_number; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Order placed : ",$order_created; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Payment Method : ",$order_payment_method; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Total Cost : $",$order_total_price; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Shipping Address : ",$order_address; ?></h6>
            <?php endforeach; ?>
    </div>
    <div class="row">
        <h3 id ="noflex" style="margin-left: 20px;margin-top: 30px;" ><u>Product Information</u></h3>
            <?php foreach ($results1 as $index => $record1) : ?>
                <?php global $Order_Items_name; ?>
                <?php global $Order_Items_description; ?>
                <?php global $Order_Items_desired_quantity; ?>
                <?php global $Order_Items_unit_price; ?>
                <?php global $Order_Items_product_id; ?>
                <?php foreach ($record1 as $column => $value) : ?>
                       <?php if($column == "name") :?>
                            <?php $Order_Items_name= $value ?>
                        <?php endif; ?>
                        <?php if($column == "description") :?>
                            <?php $Order_Items_description= $value ?>
                        <?php endif; ?>
                        <?php if($column == "product_id") :?>
                            <?php $Order_Items_product_id = $value ?>
                        <?php endif; ?>
                        <?php if($column == "desired_quantity") :?>
                            <?php $Order_Items_desired_quantity= $value ?>
                        <?php endif; ?>
                        <?php if($column == "unit_price") :?>
                            <?php $Order_Items_unit_price= $value ?>
                        <?php endif; ?>
                <?php endforeach; ?>
                <table>
                    <thread>
                        <tr></tr>
                    </thread>
                </table>
                <h6 id ="noflex" style="width : 300px;margin-left: 30px; margin-top: 20px;" ><?php echo "Product Name : ",$Order_Items_name; ?></h6>
                <h6 id ="noflex" style="width : 300px;margin-left: 5px; margin-top: 20px;" ><?php echo "Description : ",$Order_Items_description; ?></h6>
                <h6 id ="noflex" style="width : 300px;margin-left: 5px; margin-top: 20px;" ><?php echo "Quantity : ",$Order_Items_desired_quantity; ?></h6>
                <h6 id ="noflex" style="width : 300px;margin-left: 5px; margin-top: 20px;" ><?php echo "Unit Price : $",$Order_Items_unit_price; ?></h6>
                <form method="POST">
                    <div class = "row">
                        <div class = "col">
                            <input type="hidden" name="uid" value="<?php echo$order_user_id;?>">
                            <input type="hidden" name="pid" value="<?php echo$Order_Items_product_id;?>">
                            <span style="margin-left: 20px;">Rating</span>
                            <span>1</span>
                            <input class = "btn btn-primary" type="radio" name="rating" value="1">
                            <span>2</span>
                            <input class = "btn btn-primary" type="radio" name="rating" value="2">
                            <span>3</span>
                            <input class = "btn btn-primary" type="radio" name="rating" value="3">
                            <span>4</span>
                            <input class = "btn btn-primary" type="radio" name="rating" value="4">
                            <span>5</span>
                            <input class = "btn btn-primary" type="radio" name="rating" value="5" >
                        </div>
                        <div class = "col">
                            <span style="margin-left: 20px;">Comment</span>
                            <input class="form-control" type="text" name="comment" style="margin-left: 20px;width:500px;display:inline-block;" placeholder= "Enter the Comment" style ="width:500px">
                            <button  type = "submit" name ="submit" class = "btn btn-primary btn-lg" style="margin-left: 20px;width:100px"onclick="">Submit</button>
                        </div>
                    </div>      
                </form>
            <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>