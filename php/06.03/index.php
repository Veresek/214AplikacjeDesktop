<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        mysqli_report(MYSQLI_REPORT_OFF);
        $con = mysqli_connect('localhost','root','','szkola') or die("Błąd kod błędu: ".mysqli_connect_errno()." Opis błędu: ".mysqli_connect_error());
        if(!mysqli_select_db($con, 'szkola')){
            die("Błąd wyboru bazy danych. Kod błędu: ".mysqli_errno($con)." Opis błędu: ".mysqli_error($con));
        }
        $sql = "Select distinct klasa from uczniowie";
        $result = mysqli_query($con,$sql);
        ?>
        <h1>Lista uczniów Budula</h1>
        <?php 
            echo "<div><form action='index.php' method='post'><select name='selectedClass'>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<option value='{$row['klasa']}'>{$row['klasa']}</option>";
            }
            echo "</select><button name='submit'>Wyświetl uczniów</button></form></div>";

            if(isset($_POST['submit'])){
                $klasa = $_POST['selectedClass'];
                $sql = "SELECT imie, nazwisko, srednia_ocen, rok_urodzenia FROM uczniowie WHERE klasa = '$klasa' ORDER BY nazwisko;";
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result) == 0){
                    echo "Brak danych do wyświetlenia";
                }else{
                    echo "<h2>Lista uczniów z klasy $klasa</h2>";
                    echo "<table>";
                    echo "<tr><th>Imię</th><th>Nazwisko</th><th>Średnia ocen</th><th>Rok urodzenia</th></tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
                    }
                    echo "</table>";
                }
            }
        ?>
</body>

</html>