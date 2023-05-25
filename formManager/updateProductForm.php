<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/ProductForms.css">

    <title>HINT POS | INVENTORY</title>
</head>

<body>
    <!--Navigation bar
    <div class="topnav">
        <div class="logo">
            <a href="../page/adminPage.php"><img src="../assets/logo.png" alt="HINT Logo" class="logo"></a>
        </div>
        <div class="topleft">
            <a class="" href="../page/adminPage.php">Home</a>
            <a class="active" href="../page/inventoryadmin.php">Inventory</a>
            <a href="#">Reports</a>
        </div>

        <div class="topright">
            <button id="myBtn" class="menu-btn"><i class="fa fa-ellipsis-v"></i></button>
        </div>
    </div>

    <Modal Code
    <div id="myModal" class="modal">
        <! Modal content 
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <a href="../php/logout.php">Logout</a>
                <hr>
                <a href="../form/signupForm.php">Sign In</a>
            </div>
        </div>

    </div>

    <script src="../js/modal_menu.js"></script>-->

    <?php
    if (isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
    }
    ?>

    <div class="form-wrapper">
        <form class="formmat" method="post" action="../php/manager/updateProduct.php">
            <input type="hidden" name="item_id" value="<?php echo $_GET['id']; ?>">
            <br>
            <label for="item_Quantity">Enter New Quantity</label>
            <input type="number" name="item_quantity" class="textfield" required>
            <br>
            <input type="submit" name="update_Quantity" value="Update" class="button">
            <br>

        </form>
        <a href="../page/inventorymanager.php"><button class="cnl">Cancel</button></a>
    </div>
</body>