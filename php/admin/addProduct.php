<?php
session_start();

include "../../db/connection.php";

if (isset($_POST['add_Data'])) {

    $quantity = $_POST['item_quantity'];
    $itemName = $_POST['item_name'];
    $cost = $_POST['item_cost'];


    $sql = "INSERT INTO inventory (item_name, item_quantity, item_cost) VALUES ('$itemName', '$quantity', '$cost')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../page/inventoryAdmin.php");
    } else {
        echo "Try Again";
        header("Location: ../../page/inventoryAdmin.php");
    }
}
