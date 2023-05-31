<?php

session_start();
ob_start();

require_once "connect.php";

if ($_SESSION['loginOK'] != true) {
    header('Location: index.php');
    die();
}
if (isset($_GET['exit'])) {
    session_destroy();
    header('Location: index.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h2>Olá, <?= $_SESSION['name']; ?></h2>
    <p><a href="?exit">Deslogar</a></p>
    <ul>
        <li>Home</li>
        <?php if($_SESSION[level_acess] == 1){ ?>
        <li>Editar</li>
    <?php } ?>
    </ul>
</body>
</html>