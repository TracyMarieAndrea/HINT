<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">

    <title>HINT SYSTEM</title>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <img src="assets/logo.png" alt="HINT POS LOGO">
            </div>
            <h2 class="title-login">LOGIN</h2>
            <form action="php/loginConnect.php" method="post">
                <div class="username">
                    <input type="text" name="uname" id="uname" placeholder="Username" required>
                </div>
                <div class="password">
                    <input type="password" name="pword" id="pword" placeholder="Password" required>
                </div>
                <button name="submit" type="submit" class="login_btn">Login</button>
            </form>
        </div>
    </div>

</body>

</html>