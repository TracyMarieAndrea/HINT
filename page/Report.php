<?php
include "../db/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/modalMenu.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/inventory.css">
    <link rel="stylesheet" href="../css/modalInventory.css">

    <title>HINT POS | INVENTORY</title>
</head>

<body>
    <!--Navigation bar-->
    <div class="topnav">
        <div class="logo">
            <a href="adminPage.php"><img src="../assets/logo.png" alt="HINT Logo" class="logo"></a>
        </div>
        <div class="topleft">
            <a class="" href="adminPage.php">Home</a>
            <a class="active" href="inventoryadmin.php">Inventory</a>
            <a class="" href="#">Reports</a>
        </div>

        <div class="topright">
            <button id="myBtn" class="menu-btn"><i class="fa fa-ellipsis-v"></i></button>
        </div>
    </div>

    <!--Modal Codes-->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <a href="../php/logout.php">Logout</a>
                <hr>
                <a href="../form/signupForm.php">New Account</a>
            </div>
        </div>
    </div>

    <script src="../js/modalMenu.js"></script>

    <?php
    $sql = "SELECT * FROM inventory";

    $result = mysqli_query($conn, $sql);
    ?>

    <div class="table">
        <table>
            <thead>
                <tr class="rowhead">
                    <th> </th>
                    <th> Item </th>
                    <th> Cost </th>
                    <th> Quantity </th>
                    <th> Options </th>
                </tr>
            </thead>
        </table>
    </div>

</body>

</html>