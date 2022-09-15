<?php
require_once 'vendor/autoload.php';
session_start();
use Icepace\LoginUser;
if(isset($_POST['usernameInput']) && isset($_POST['passwordInput'])) {
    if($_POST['usernameInput'] == '' || $_POST['passwordInput'] == '') {
        header('Location:login.php');
    } else {
        $username = $_POST['usernameInput'];
        $password = $_POST['passwordInput'];
        $db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
        $resultArray = (LoginUser::checkingUserExists($db, $username));
        if(password_verify($password, $resultArray['hashed_pass'])) {
            $_SESSION['loggedIn'] = true;
        } else {
            echo "Your password was incorrect!";
        }
    }

} else {
    header('Location:login.php');
}
?>
<html>
<body>
<? if($_SESSION['loggedIn'] === true) {
    $userProfileString = 'userProfile.php?username=' . $username;
    echo '<p>You have logged in sucessfully</p>';
    echo '<a href="' . $userProfileString . '"/>Go to profile</a>';

} else {
    echo "<p>Your password is incorrect </p>";
} ?>
</body>
</html>
