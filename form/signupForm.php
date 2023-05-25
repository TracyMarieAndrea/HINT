<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/signup.css">

    <title>HINT POS System | SIGN IN</title>
</head>

<body>
    <div class="topnav">
        <a href="../index.php"><button class="back-btn"><i class="fa fa-chevron-left"></i></button></a>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <img src="../assets/logo.png" alt="HINT POS LOGO">
            </div>
            <h2 class="title-login">SIGN IN</h2>
            <form action="../php/signup.php" method="post">
                <div class="role">
                    <input type="text" name="role" id="role" placeholder="Enter role" required>
                </div>
                <div class="username">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="password">
                    <input type="text" name="password" id="password" placeholder="Password" required>
                </div>
                <button name="submit" type="submit" class="signin_btn">Create New Account</button>
            </form>
            <a href="#"><button name="button" type="button" class="cancel">Cancel</button></a>
        </div>
    </div>
</body>

</html>