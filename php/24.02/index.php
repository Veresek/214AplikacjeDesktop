<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="user">Nazwa użytkownika:</label>
        <input type="text" name="user" id="user" value="<?= $_POST['user'] ?? '' ?>">
        <br>
        <label for="password">Hasło:</label>
        <input type="password" name="password" id="password" value="<?= $_POST['password'] ?? '' ?>">
        <input type="submit" value="Zaloguj">
    </form>
    <?php 
        $correctPassword = '1234';
        $correctUser = 'admin';
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['user']) && !empty($_POST['password'])){
            $user = htmlspecialchars($_POST['user']);
            $password = htmlspecialchars($_POST['password']);
            if($user == $correctUser && $password == $correctPassword){
                echo '<p style="color:green;">Zostałeś zalogowany</p>';
            }
            else{
                    echo '<p style="color:red;">Niepoprawne dane logowania</p>';
            }
        }else{
            echo '<p style="color:red;">Wypełnij prawidłowo formularz</p>';
        }
    ?>
</body>
</html>