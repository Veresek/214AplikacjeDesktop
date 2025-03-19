<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        header('location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Witaj <?= $_SESSION['login'] ?></h1>
    <p>Udało się zalogowac</p>
    <p>Tutaj są twoje prywatne informacje</p>
    <a href="logout.php">Wyloguj</a>
</body>
</html>