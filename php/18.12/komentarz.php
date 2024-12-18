<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="komentarz.php" method="post">
        <label for="name">Pseudonim: </label>
        <input type="text" name="name"><br><br>
        <label for="comment">Komentarz: </label>
        <textarea name="comment" rows="10" cols="30"></textarea><br><br>
        <input type="submit" value="Wyślij komentarz">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
            $comment = isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : '';
            echo "<h2>Twój komentarz</h2>";
            echo "<strong>Pseudonim:</strong> $name<br>";
            echo "<strong>Komentarz:</strong> $comment";
        }
    ?>
</body>
</html>