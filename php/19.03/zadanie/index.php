<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Login: <input type="text" name="login" required>
        Hasło: <input type="password" name="haslo" required>
        <button type="submit" name="submit">Zaloguj</button>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['haslo']);
            if($login == "Dyr2020" && $password == "aq1@WS"){
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                header('location: panel.php');
                exit();
            }else{
                echo "<p style='color:red;'>Błędne dane logowania</p>";
            }   
        }
    ?>
</body>
</html>