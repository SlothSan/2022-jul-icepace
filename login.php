<?php

use Icepace\LoginUser;

$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <title>Icepace</title>
</head>
<body>
<nav>
    <a class="homePageTitle" href="index.php">
        <h1>Icepace</h1>
    </a>
    <div class="navBarButton">
        <div class="buttonContainer">
            <a class="navButton" href="login.php">Login</a>
        </div>
        <div class="buttonContainer">
            <a class="navButton" href="">Logout</a>
        </div>
    </div>
</nav>
<div class="loginPageContainer">
    <div class="loginPageFormContainer">
        <h2 class="loginTitle">Login</h2>
        <form class="loginForm" method="POST" action="loginUser.php">
            <div class="inputContainer">
                <label class="inputLabel" for="usernameInput">Username</label>
                <input type-="text" name="usernameInput" class="usernameInput" id="usernameInput" />
            </div>
            <div class="inputContainer">
                <label class="inputLabel" for="passwordInput">Password</label>
                <input type-="password" name="passwordInput" class="passwordInput" id="passwordInput" />
            </div>
            <div class="inputContainer">
            <input class="submitForm" type="submit" value="Login to Icepace!">
            </div>
        </form>
    </div>
</div>
</body>
</html>

