<?php
session_start();

include "../../db/connection.php";

if (isset($_POST['update_Quantity'])) {

    $id = $_POST['item_id'];
    $quantity = $_POST['item_quantity'];
    //$cost = $_POST['item_cost'];
    //$itemName = $_POST['item_name'];

    $query = "UPDATE inventory SET item_quantity='$quantity' WHERE item_id='$id;' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "";
        header("Location: ../../page/inventorymanager.php");
    } else {
        $_SESSION['status'] = "";
        header("Location: ../../page/inventorymanager.php");
    }
}
