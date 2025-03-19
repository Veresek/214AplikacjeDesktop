<?php 
    session_start();
    // if(!isset($_SESSION["login"]) || !isset($_SESSION['password'])){
    //     header("location: index.php");
    //     exit();
    // }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Uczniowie</h1>
    <?php 
        mysqli_report(MYSQLI_REPORT_OFF);
        $con = mysqli_connect('localhost','root','','szkola') or die("Błąd kod błędu: ".mysqli_connect_errno()." Opis błędu: ".mysqli_connect_error());
        if(!mysqli_select_db($con, 'szkola')){
            die("Błąd wyboru bazy danych. Kod błędu: ".mysqli_errno($con)." Opis błędu: ".mysqli_error($con));
        }
        $sql = "SELECT imie, nazwisko, srednia_ocen, rok_urodzenia FROM uczniowie";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) == 0){
            echo "Brak danych do wyświetlenia";
        }else{
            echo "<table>";
            echo "<tr><th>Imię</th><th>Nazwisko</th><th>Średnia ocen</th><th>Rok urodzenia</th></tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
            }
            echo "</table>";
        }
        ?>
</body>
</html>