<?php
require_once(__DIR__ . "/../../../lib/functions.php");
session_start();
$response = ["message" => "There was a problem completing your purchase"];
http_response_code(400);
error_log(var_export($_POST, true));
if (isset($_POST["product_id"])) {
    $product_id = se($_POST, "product_id", 0, false);
    $user_id = get_user_id();
    $db = getDB();
    $db->beginTransaction();
    //deduct item
    $stmt = $db->prepare("UPDATE  set quantity = quantity - 1 WHERE product_id = :id");
    $usedItem = false;
    try {
        $stmt->execute([":id" => $product_id]);
        //TODO check if "check" constraint failed (quantity < 0)
        //TODO check affected rows (0 means they didn't own the item)
        $usedItem = true;
    } catch (PDOException $e) {
        error_log("Use Item Error: " . var_export($e->errorInfo, true));
        if ($e->errorInfo[1] === 3819) {
            http_response_code(404);
            $response["message"] = "You don't have any of this item remaining";
            $response["delete"] = $product_id; //tell the UI to remove the item from the grid
        }
        $db->rollback();
    }
    if ($usedItem) {
        $item = [];
        $stmt = $db->prepare("SELECT user,desired_quantity, name from Products JOIN Cart inv on i.id = inv.product_id WHERE i.id = :id");
        try {
            $stmt->execute([":id" => $product_id]);
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            //tell the UI to update the usage quantity
            $response["remaining"] = se($item, "quantity", 0, false);
        } catch (PDOException $e) {
            error_log("Fetch Item Error: " . var_export($e->errorInfo, true));
            $db->rollback();
            $response["remaining"] = ((int)se($item, "quantity", 0, false) + 1);
        }
        if ($item) {
            $stmt = $db->prepare("INSERT INTO BGD_ActiveEffects (item_id, user_id, uses) VALUES (:iid, :uid, :u) ON DUPLICATE KEY UPDATE uses = uses + :u");
            try {
                $stmt->bindValue(":u", se($item, "uses", 1, false), PDO::PARAM_INT);
                $stmt->bindValue(":iid", $item_id, PDO::PARAM_INT);
                $stmt->bindValue(":uid", $user_id, PDO::PARAM_INT);
                $stmt->execute();
                http_response_code(200);
                $response["message"] = "Activated " . se($item, "name", "", false);
                $db->commit();
            } catch (PDOException $e) {
                error_log("Activate Item Error: " . var_export($e->errorInfo, true));
                $db->rollback();
                $response["remaining"] = ((int)se($item, "quantity", 0, false) + 1);
            }
        }
    }
}
echo json_encode($response);