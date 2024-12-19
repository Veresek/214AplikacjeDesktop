<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="zamowienie.php" method="post">
        <h2>Wypełnij zamówienie na burgera</h2><br>
        <label for="roll">Wybierz typ bułki:</label> <br>
        <select name="roll">
            <option value="deafult" default>Wybierz typ bułki</option>
            <option value="pszenna">Pszenna</option>
            <option value="zytnia">Żytnia</option>
            <option value="bezglutenowa">Bezglutenowa</option>
        </select><br><br>
        <label for="souce">Wybierz sos:</label> <br>
        <p><input type="radio" name="sauce" value="ketchup" checked>Ketchup</p>
        <p><input type="radio" name="sauce" value="majonez">Majonez</p>
        <p><input type="radio" name="sauce" value="musztarda">Musztarda</p>
        <br>
        <label for="extras">Wybierz dodatki:</label>
        <p><input type="checkbox" name="extras[]" value="ser"> Ser</p>
        <p><input type="checkbox" name="extras[]" value="boczek"> Boczek</p>
        <p><input type="checkbox" name="extras[]" value="salata"> Sałata</p>
        <p><input type="checkbox" name="extras[]" value="pomidor"> Pomidor</p>
        <p><input type="checkbox" name="extras[]" value="cebula"> Cebula</p>
        <input type="submit" value="Prześlij zamówienie" name="sub">
    </form>
    <?php 
        if(isset($_POST['sub'])){
            if($_POST['roll'] == "deafult"){
                echo "<br>Wybierz typ bulki";
            }
            else{
                $bulka = $_POST['roll'];
                $sos = $_POST['sauce'];
                echo"<h1>Twoje zamówienie:</h1>";
                echo"<br><strong>Typ bułki: </strong> $bulka";
                echo "<br><strong>Sos: </strong> $sos";
                echo "<br><br><strong>Dodatki:</strong>";
                echo "<ul>";
                if(!empty($_POST['extras'])) {
                    foreach($_POST['extras'] as $extra) {
                            echo "<li>$extra</li>";
                    }
                }
                else{
                    echo "Brak dodatków";
                }
                echo "</ul>";
            }
        }
    ?>
</body>
</html>