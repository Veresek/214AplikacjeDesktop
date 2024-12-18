<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="login">
        <input type="password" name="haslo">
        <input type="checkbox" name="remember">
        <label for="remember">Zapamiętaj mnie</label>
        <input type="submit" name="sub" value="Zaloguj się">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : '';
            if(isset($_POST['remember'])){
                $check = "zaznaczony";
            }else{ 
                $check = "niezaznaczony";
            }
            echo "<h1>Wynik logowania </h1>";
            echo "Twój login: $login <br>";
            echo "Checkbox 'Zapamiętaj mnie' jest: $check";
        }
    ?>
</body>
</html>