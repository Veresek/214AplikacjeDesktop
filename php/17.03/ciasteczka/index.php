<?php 
    header('refresh: 3');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>COOKIES PHP</h1>
    <?php 
        if(isset($_COOKIE['ciacho'])){
            echo "Ciasteczko o nazwie ciacho istnieje i ma wartość {$_COOKIE['ciacho']}<br>";
        }
        else{
            echo "Ciasteczko o nazwie ciacho nie istnieje<br>";
        }
    ?>
    <br><a href="<?=$_SERVER['PHP_SELF']?>">Odśwież stronę</a><br>
    <a href="setcookie.php">Dodaj ciasteczko</a><br>
    <a href="deletecookie.php">Usuń ciasteczka</a>
</body>
</html>