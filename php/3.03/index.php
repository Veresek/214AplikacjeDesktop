<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nasza Szkola</h1>
    <?php 
        mysqli_report(MYSQLI_REPORT_OFF);
        $con = mysqli_connect('localhost','root','','school') or die('Błąd połączenia MYSQL kod błędu'.mysqli_connect_errno()."<br>Opis błędu: ".mysqli_connect_error());
        echo 'Udało się połączyć MYSQL';

        if(!mysqli_select_db($con, 'school')){
            die("Błąd wyboru bazy danych. Kod błędu: ".mysqli_errno($con)." Opis błędu: ".mysqli_error($con));
        }else{
            echo "<br>Udało się wybrać bazę danych";
        }
        $sql = "Select * from students ORDER BY surname";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)==0){
            echo "Brak danych do wyświetlenia<br>";
        }else{
            // echo "Są dane w tabeli: <br>";
            // while($row = mysqli_fetch_assoc($result)){
            //     // echo "$row[1] $row[2] z klasy $row[4] ma średnią ocen $row[3]<br>";
            //     echo $row['name']." ".$row['surname']." z klasy ".$row['class']." ma średnią ocen ".$row['average']."<br>";
            // }
            // echo "<h3>Uczniowie naszej szkoły</h3>";
            // echo "<ol type='A'>";
            // while($row = mysqli_fetch_array($result)){
            //     echo "<li>$row[1] $row[2], $row[4]</li>";
            // }
            // echo "</ol>";
            echo "<table>";
            echo "<tr><th>Imie</th><th>Nazwisko</th><th>Klasa</th><th>Srednia</th></tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td><td>$row[3]</td></tr>";
            }
            echo "</table>";
        }
    ?>
    <!-- <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Imie"><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br>
        <input type="text" name="class" placeholder="Klasa"><br>
        <input type="text" name="average" placeholder="Średnia"><br>
        <input type="submit" value="Dodaj ucznia" name="submit"><br>
    </form>
    <?php 
    // if(isset($_POST['submit'])){
    //     $name = htmlspecialchars($_POST['name']);
    //     $surname = htmlspecialchars($_POST['surname']);
    //     $class = htmlspecialchars($_POST['class']);
    //     $average = htmlspecialchars($_POST['average']);
    //     if($name=="" || $surname=="" || $class=="" || $average==""){
    //         echo "Wypełnij wszystkie pola";
    //     }else{
    //         $sql = "INSERT INTO students (name, surname, class, average) VALUES ('$name', '$surname', '$class', '$average')";
    //         mysqli_query($con, $sql);
    //         $name = "";
    //         $surname = "";
    //         $class = "";
    //         $average = "";
    //     }
    // }
    // else{
        
    // }
    // mysqli_close($con);
    ?> -->
    <form action="index.php" method="post">
        <input type="text" name="klasa">
        <button name="submitoo">Wyszukaj</button>
    </form>
    <?php 
        if(isset($_POST['submitoo'])){
            $klasa = $_POST['klasa'];
            $sql = "Select * from students where class='$klasa'";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)==0){
                echo "Brak danych do wyświetlenia<br>";
            }else{
                echo "<ol>";
                while($row = mysqli_fetch_array($result)){
                    echo "<li>$row[1] $row[2], $row[4]</li>";
                }
                echo "</ol>";
            }
        }
    ?>
</body>
</html>