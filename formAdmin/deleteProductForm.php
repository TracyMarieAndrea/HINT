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

    Modal Codes
    <div id="myModal" class="modal">
        Modal content 
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <a href="../php/logout.php">Logout</a>
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
        <form class="formmat" method="post" action="../php/admin/deleteProduct.php">
            <input type="hidden" name="item_id" value="<?php echo $_GET['id']; ?>">
            </br>
            <p> Are you sure you want to delete? Yes / No </p>
            <br>
            <input type="submit" name="Deletion" value="Yes" class="button">
            <a href="../page/inventoryadmin.php"><input type="button" name="No_Delete" value="No" class="button"></a>
        </form>
    </div>

</body>