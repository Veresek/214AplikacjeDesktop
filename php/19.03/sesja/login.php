<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $login = htmlspecialchars(trim($_POST["login"]));
        $password = htmlspecialchars(trim($_POST["password"]));
        $correctLogin = "Jan";
        $correctPassword = "1234";
        if($login === $correctLogin && $password === $correctPassword){
            $_SESSION["login"] = $login;
            header("location: index.php");
            exit();
        }else{
            $error = "Zły login lub hasło";
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
        }
        form{
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Login: <input type="text" name="login">
        Hasło: <input type="password" name="password">
        <input type="submit" name="submit-btn" value="ZALOGUJ">
    </form>
    <?php 
        if(isset($error)){
            echo "<p style='color:red;'>$error</p>";
        }
    ?>
</body>
</html>