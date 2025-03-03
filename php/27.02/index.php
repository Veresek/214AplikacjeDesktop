<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zad 3</h1>
    <h3>Wprowadź rok, aby sprawdzić czy jest przestępny</h3>
    <form action="index.php" method="post">
        <label for="year">Rok:</label>
        <input type="number" name="year" required>
        <button name="submit">Sprawdź</button>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $year = $_POST['year'];
            if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
                echo "<h2>Rok $year jest rokiem przestępnym</h2>";
            }
            else{
                echo "<h2>Rok $year nie jest rokiem przestępnym</h2>";
            }
        }
    ?>
    <br>
    <h1>Zad 4</h1>
    <form action="index.php" method="post">
        <label for="date1">Data 1:</label>
        <input type="date" name="date1" required><br>
        <label for="date2">Data 2:</label>
        <input type="date" name="date2" required><br>
        <button name="submit2">Oblicz rożnicę dni</button>
    </form>
    <?php 
        if(isset($_POST['submit2'])){
            $dat1 = $_POST['date1'];
            $dat2 = $_POST['date2'];
            $date1 = strtotime($_POST['date1']);
            $date2 = strtotime($_POST['date2']);
            $diff = abs($date1 - $date2);
            $diff = ceil($diff/(60*60*24));
            echo "<br><h2>Pomiędzy $dat1 a $dat2 jest $diff dni różnicy</h2>";
        }
    ?>
</body>
</html>