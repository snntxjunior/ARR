<?php

session_start();
ob_start();

require_once "./connect.php";

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$stmt = $connect->prepare("SELECT * FROM users WHERE email = :email AND password = :password");

$stmt->bindValue(":email", $email);
$stmt->bindValue(":password", $password);

$stmt->execute();

if ($stmt->rowCount() == 1) {
    $infoUser = $stmt->fetch();
    //var_dump($infoUser);
    $_SESSION['loginOK'] = true;
    $_SESSION['id'] = $infoUser['id'];
    $_SESSION['name'] = $infoUser['name'];
    $_SESSION['email'] = $infoUser['email'];
    $_SESSION['password'] = $infoUser['password'];
    $_SESSION['level_access'] = $infoUser['level_access'];

    header('Location: dashboard.php');
}else {
    header('Location: index.php');
}
?>