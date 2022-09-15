<?php

namespace Icepace;

use PDO;

require_once "vendor/autoload.php";

class LoginUser
{
    public static function checkingUserExists(PDO $db, string $username)
    {
        $query = $db->prepare('SELECT `username`, `hashed_pass` FROM `users` WHERE `username` =?');
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute([$username]);
        return $query->fetch();
    }
    public static function logInUser($result)
    {
        $userPassword = $_POST['passwordInput'];
        $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);
        if ($hashedPassword == $result['hashed_pass']) {
            session_start();
            $_SESSION['currentUser'] = $result;
            header('Location:userProfile.php');
        }

    }



}