<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dodaj nowego użytkownika</h1>
    <form action="index.php" method="post">
        Imię i nazwisko: <br> <input type="text" name="name" required> <br>
        Email: <br> <input type="email" name="email" required> <br>
        Wiek: <br> <input type="number" name="age" required> <br> <br>
        <button type="submit" name="submit">Dodaj użytkownika</button>
    </form>
    <?php 
        if(isset($_POST['submit'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $age = $_POST['age'];
            $conn = mysqli_connect('localhost','root','','baza');
            $sql = "INSERT INTO users (imieNazwisko, email, wiek) VALUES ('$name', '$email', '$age')";
            $result = mysqli_query($conn, $sql);
            $sql = "Select id from users where imieNazwisko = '$name' and email = '$email' and wiek = '$age'";
            $result = mysqli_query($conn, $sql);
            echo "<br> Dodano użytkownika o id: " . mysqli_fetch_assoc($result)['id'];
            mysqli_close($conn);
        }
    ?>
    <h1>Sprawdz pełnoletność użytkownika</h1>
    <form action="index.php" method="post">
        <button name="pelnoletnosc">Sprawdź pełnoletność</button>
    </form> 
    <?php 
        if(isset($_POST['pelnoletnosc'])) {
            $conn = mysqli_connect("localhost", "root", "", "baza");
            $sql = "UPDATE users SET pelnoletnosc = true WHERE wiek >= 18";
            $result = mysqli_query($conn, $sql);
            echo "<br>Zmieniono pełnoletność dla ". mysqli_affected_rows($conn) . " użytkowników";
        }
    ?>
</body>
</html>