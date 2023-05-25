<?php
$pid = $_POST['pid'];
$qty = $_POST['qty'];

$conn = mysqli_connect("localhost", "root", "", "hintsystem");
$sql = "SELECT * FROM inventory WHERE item_id=$pid";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($data as $d) :

    $current_qty =  $d['item_quantity'];

    $single_price = $d['item_cost'];

    // $iName = $d['item_name'];

    $new_qty = $current_qty - $qty;

    $priceTotal = $qty * $single_price;

    $sql2 = "UPDATE inventory SET item_quantity=$new_qty WHERE item_id=$pid;
                INSERT INTO reportTable(item_id, buy_Quantity, price_Total)
                VALUES ($pid, $qty, $priceTotal);";

    if ($conn->multi_query($sql2) === TRUE) {

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Error updating record: " . $conn->error;
    }


endforeach;
