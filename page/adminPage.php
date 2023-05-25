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
        <link rel="stylesheet" href="../css/productModal.css">
        <link rel="stylesheet" href="../css/card.css">
        <link rel="stylesheet" href="../css/modalCard.css">
        <style>
            .card {
                margin-bottom: 20px;
            }

            .show {
                display: block !important;
            }
        </style>

        <title>HINT POS | HOME</title>
    </head>

    <body>
        <!--Navigation bar-->
        <div class="topnav">
            <div class="logo">
                <a href="adminPage.php"><img src="../assets/logo.png" alt="HINT Logo" class="logo"></a>
            </div>
            <div class="topleft">
                <a class="active" href="adminPage.php">Home</a>
                <a href="inventoryadmin.php">Inventory</a>
                <a href="Reports.php">Reports</a>
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
                    <a href="signupForm.php">New Account</a>
                </div>
            </div>

        </div>

        <div class="roleSec">
            <div class="role-title">
                <p>ADMIN</p>
            </div>
        </div>
        <div class="select">
            <div class="select-title">
                <p>Select a Product</p>
            </div>
        </div>
        <!--Products Section-->
        <div class="product">
            <div class="product-cards">
                <?php
                // Connect to the database and fetch the data
                $conn = mysqli_connect("localhost", "root", "", "hintsystem");
                $sql = "SELECT * FROM inventory";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach ($data as $d) :
                ?>
                    <!--Card HTML-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-name"><?php echo $d['item_name']; ?> </h5>
                            <p class="card-details">Price: ₱ <?php echo $d['item_cost']; ?> </p>
                            <p class="card-details">Quantity: <?php echo $d['item_quantity']; ?> pcs</p>
                            <button class="btn btn-primary buyprod" id="<?php echo $d['item_id']; ?> ">Select</button>
                        </div>
                    </div>

                    <!--Modal Button-->
                    <div class="modal-product pop_<?php echo $d['item_id']; ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-product-content">
                                <div class="modal-product-header">
                                    <button type="button" class="close-btn hide close_<?php echo $d['item_id']; ?>" data-dismis="pop_<?php echo $d['item_id']; ?>" aria-label="Close"><span>&times;</span></button>
                                </div>
                                <div class="modal-product-body">
                                    <h5 class="card-name"><?php echo $d['item_name']; ?> </h5>
                                    <hr>
                                    <p class="card-details">Price: ₱ <?php echo $d['item_cost']; ?> </p>
                                    <p class="card-details">Quantity: <br><?php echo $d['item_quantity']; ?> pcs</p>

                                </div>
                                <form method="post" action="../php/purchase.php">
                                    <input type="hidden" name="pid" value="<?php echo $d['item_id']; ?>">
                                    <input type="number" name="qty" min="0" placeholder="Enter quantity to purchase" required>
                                    <div class="modal-product-footer">
                                        <button type="button" class="cancel-btn hide cancel_<?php echo $d['item_id']; ?>" data-dismiss="pop_<?php echo $d['item_id']; ?>">Cancel</button>
                                        <button type="submit" class="purchase-btn btn-primary">Purchase</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
        <script src="../js/modalMenu.js"></script>
        <script src="../js/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                // When the view details button is clicked
                $('.buyprod').click(function() {
                    // Get the ID of the clicked button
                    var id = $(this).attr('id');

                    $('.pop_' + id).addClass('show');

                });

                $(".hide").click(function() {
                    var id = $(this).data('dismis');
                    $('.' + id).removeClass('show');
                });

                $(".hide").click(function() {
                    var id = $(this).data('dismiss');
                    $('.' + id).removeClass('show');
                })

            });
        </script>

    </body>

    </html>