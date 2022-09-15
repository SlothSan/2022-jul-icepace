<?php
require_once 'vendor/autoload.php';

use Icepace\LoginUser;
use Icepace\UserCreator;

$username = $_POST['usernameInput'];
$db = new PDO('mysql:host=db; dbname=icepace', 'root', 'password');
$resultArray = (LoginUser::checkingUserExists($db, $username));
print_r($resultArray);

