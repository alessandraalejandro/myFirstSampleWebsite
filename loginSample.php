<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Sample</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>
<body>
    <form action="loginSample.php" method="post">
    <div>
        <h1>Login!</h1>
        <div>
            <label for="usernameLogin">Username</label>
            <input type="text" name="usernameLogin" id="usernameLogin" placeholder="username0001@website.com">
        </div>
        <div>
            <label for="passwordLogin">Password</label>
        <input type="password" name="passwordLogin" id="passwordLogin">
        </div>

    <button type="submit">Login</button>
    </div>
    </form>

    <?php
    $user = $_POST["usernameLogin"];
    echo "Welcome " . $user . "<br>You are Logged in";
    ?>

</body>
</html>