<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
//Sort and Filters
$col = se($_GET, "col", "unit_price", false);
//allowed list
if (!in_array($col, ["unit_price", "stock", "name", "created", "out_stock", "average_rating", "category"])) {
    $col = "unit_price"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
$name = se($_GET, "name", "", false);

//split query into data and total
$base_query = "SELECT id, name, description, unit_price, stock, image FROM Products";
$total_query = "SELECT count(1) as total FROM Products products";
//dynamic query
$query = " WHERE 1=1"; //1=1 shortcut to conditionally build AND clauses
$params = []; //define default params, add keys as needed and pass to execute
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
//apply column and order sort
if (!empty($col) && !empty($order) && $col != "out_stock") {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}
if (!empty($col) && !empty($order) && $col=="out_stock") {
    $query = " WHERE stock = 0"; //be sure you trust these values, I validate via the in_array checks above
}
//paginate function
$per_page = 5;
paginate($total_query . $query, $params, $per_page);

$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues


//$stmt = $db->prepare("SELECT id, name, description, unit_price, stock, image FROM Products WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<script>
    function cart(product, unit_price) {
        console.log("TODO purchase product", product);
        let example = 1;
        if (example === 1) {
            let http = new XMLHttpRequest();
            http.onreadystatechange = () => {
                if (http.readyState == 4) {
                    if (http.status === 200) {
                        let data = JSON.parse(http.responseText);
                        console.log("received data", data);
                        flash(data.message, "success");
                        /* refreshBalance(); */
                    }
                    console.log(http);
                }
            }
            http.open("POST", "cart.php", true);
            let data = {
                product_id: product,
                desired_quantity: 1,
                unit_price: unit_price
            }
            let q = Object.keys(data).map(key => key + '=' + data[key]).join('&');
            console.log(q)
            http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            http.send(q);
        } else if (example === 2) {
            let data = new FormData();
            data.append("product_id", product);
            data.append("desired_quantity", 1);
            data.append("unit_price", unit_price);
            fetch("cart.php", {
                    method: "POST",
                    headers: {
                        "Content-type": "application/x-www-form-urlencoded",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: data
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    flash(data.message, "success");
                    //refreshBalance();
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        } else if (example === 3) {
            $.post("cart.php", {
                    product_id: product,
                    desired_quantity: 1,
                    unit_price: unit_price
                }, (resp, status, xhr) => {
                    console.log(resp, status, xhr);
                    let data = JSON.parse(resp);
                    flash(data.message, "success");
                    //refreshBalance();
                },
                (xhr, status, error) => {
                    console.log(xhr, status, error);
                });
        }
        //TODO create JS helper to update all show-balance elements
    }
</script>

<div class="container-fluid">
    <h1>Shop</h1>
    <form class="row row-cols-auto g-3 align-items-center">
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Name</div>
                <input class="form-control" name="name" value="<?php se($name); ?>" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control" name="col" value="<?php se($col); ?>">
                    <option value="unit_price">Unit Price</option>
                    <option value="category">Category</option>
                    <option value="stock">Stock</option>
                    <option value="name">Name</option>
                    <option value="created">Created</option>
                    <option value="average_rating">Average Rating</option>
                    <?php if (has_role("Admin")) : ?>
                        <option value="out_stock">Out of Stock</option>
                    <?php endif; ?>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" name="order" value="<?php se($order); ?>">
                    <option value="asc">Up</option>
                    <option value="desc">Down</option>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].order.value = "<?php se($order); ?>";
                </script>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $product) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        Product
                    </div>
                    <?php if (se($product, "image", "", false)) : ?>
                        <img src="<?php se($product, "image"); ?>" class="card-img-top" alt="...">
                    <?php endif; ?>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($product, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($product, "description"); ?></p>
                        <p  style="margin-bottom: 0px;"><u> </u><?php se($product, "average_rating"); ?></p>
                    </div>
                    <!--added-->
                    <div class="card-footer">
                        Unit Price: <?php se($product, "unit_price"); ?>
                        <!-- Cart-->
                        <form action="<?php echo get_url('cart.php');?>" method="POST">
                            <input type="hidden" name="product_id" value="<?php se($product, 'id'); ?>" />
                            <input type="number" name="desired_quantity" value="1" />
                            <input type="submit" value="Add to Cart" name ="add"/>
                            </form>
                        <?php if (has_role("Admin")) : ?> 
                            <td>
                                <a href="admin/edit_item.php?id=<?php se($product, "id"); ?>">Edit</a>
                                <!--<a href="<?php echo get_url('product_details.php?id=') . se($product, "id"); ?>">Details</a>-->
                                <a href="product_details.php?id=<?php se($product, "id"); ?>">Product Details</a>
                            </td>
                            <?php endif; ?>
                        <!-- example form submit-->
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- this will be moved into a partial file for reusability-->
    <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>