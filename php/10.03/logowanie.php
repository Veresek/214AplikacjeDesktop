<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="./styl4.css">
</head>

<body>
    <header>
        <h1>Forum wielbicieli psów</h1>
    </header>
    <main>
        <section class="left">
            <img src="./obraz.jpg" alt="foksterier">
        </section>
        <section class="right">
            <div class="top">
                <h2>Zapisz się</h2>
                <form action="logowanie.php" method="post">
                    <label for="login">login: </label>
                    <input type="text" name="login"><br>
                    <label for="haslo">hasło: </label>
                    <input type="password" name="haslo"><br>
                    <label for="powtorz">powtórz hasło: </label>
                    <input type="password" name="powtorz"><br>
                    <button type="submit" name="submit">Zapisz</button>
                </form>
                <?php 
                    $con = mysqli_connect('localhost','root','','psy');
                    if(isset($_POST['submit'])){
                        $login = $_POST['login'];
                        $haslo = $_POST['haslo'];
                        $powtorz = $_POST['powtorz'];
                        $sql = "Select login from uzytkownicy where login = '$login'";
                        $result = mysqli_query($con,$sql);
                        if($login == '' || $haslo == '' || $powtorz == ''){
                            echo "<p>wypełnij wszystkie pola</p>";
                        }
                        elseif(mysqli_num_rows($result) != 0){
                            echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
                        }
                        elseif($haslo != $powtorz){
                            echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                        }
                        else{
                            $hashed = sha1($haslo);
                            $sql = "Insert into uzytkownicy (login, haslo) VALUES ('$login','$hashed')";
                            $result = mysqli_query($con, $sql);
                            echo "<p>Konto dla <span>$login</span> zostało dodane</p>";
                        }
                    }
                    mysqli_close($con);
                ?>
            </div>
            <div class="bottom">
                <h2>Zapraszamy wszystkich</h2>
                <ol>
                    <li>właścicieli psów</li>
                    <li>weterynarzy</li>
                    <li>tych, co chcą kupić psa</li>
                    <li>tych, co lubią psy</li>
                </ol>
                <a href="regulamin.html">Przeczytaj regulamin forum</a>
            </div>
        </section>
    </main>
    <footer>
        Stronę wykonał: 09
    </footer>
</body>

</html>