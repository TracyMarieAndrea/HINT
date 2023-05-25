<?php
session_start();

include "../../db/connection.php";

if (isset($_POST['Deletion'])) {

    $id = $_POST['item_id'];

    $query = "DELETE FROM inventory WHERE item_id='$id;' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "";
        header("Location: ../../page/inventorymanager.php");
    } else {
        $_SESSION['status'] = "";
        header("Location: ../../page/inventorymanager.php");
    }
}
