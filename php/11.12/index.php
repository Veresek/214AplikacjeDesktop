<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Operacje artymetyczne</h1>
    <form action="index.php" method="post">
        <label for="num1">Liczba 1 (a):</label>
        <input type="text" id="num1" name="num1"> <br>
        <label for="num2">Liczba 2 (b):</label>
        <input type="text" id="num2" name="num2"><br>
        <label for="num3">Liczba 3 (x):</label>
        <input type="text" id="num3" name="num3"><br>
        <label for="num4">Liczba 4 (c):</label>
        <input type="text" id="num4" name="num4"><br>
        <input type="submit" name="submit-btn" value="Policz" default="0">
    </form>
    <?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";
    if(isset($_POST['submit-btn'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];
        $delta = pow($num2,2) - 4*$num1*$num4;
        //Zad1
        if($num1%2 == 0){
            echo "<br>$num1 jest parzysta";
        }
        else{
            echo "<br>$num1 jest nieparzysta";
        }
        //Zad2
        echo "<br>Większa liczba to ".max($num1,$num2);
        //Zad3
        echo "<br>Największa liczba to ".max($num1,$num2,$num3,$num4);
        //Zad4
        $liczby3 = [$num1, $num2,$num3];
        echo "<br>Liczby w kolejności od najwięszej do najmniejszej: ".sort($liczby3);
        //Zad5
        $liczby4 = [$num1, $num2,$num3,$num4];
        echo "<br>Liczby w kolejności od najwięszej do najmniejszej: ".sort($liczby4);
        //Zad6
        if($delta > 0){
            $x1 = ((-$num2) - sqrt($delta))/(2*$num1);
            $x2 = ((-$num2) + sqrt($delta))/(2*$num1);;
            echo "Pierwsze rozwiązanie wynosi $x1 a drugie $x2";
        }
        elseif($delta > 0){
            $x = -$num2/(2*$num1);
            echo "Rozwiązanie to $x";
        }
        else{
            echo "<br> Równanie nie ma rozwiązań";
        }
    }
    ?>
</body>
</html>