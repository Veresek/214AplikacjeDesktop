<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function showName($name){
            echo "<h3>Zadanie 1</h3>";
            echo "$name";
            echo "<br><hr><br>";
        }
        function drugie($num){
            echo "<h3>Zadanie 2</h3>";
            if($num % 5 == 0 && $num % 7 == 0){
                echo "true";
            }
            echo "<br><hr><br>";
        }
        function trzecie($cena){
            echo "<h3>Zadanie 3</h3>";
            $vat = $cena * 0.23;
            $brutto = $cena + $vat;
            echo "netto: $cena zł, vat: $vat zł, brutto: $brutto zł";
            echo "<br><hr><br>";
        }
        function czwarte($num1, $num2, $opr){
            echo "<h3>Zadanie 4</h3>";
            switch($opr){
                case '+':
                    echo $num1 + $num2;
                    break;
                case '-':
                    echo $num1 - $num2;
                    break;
                case '*':
                    echo $num1 * $num2;
                    break;
                case '/':
                    echo $num1 / $num2;
                    break;
                case '**':
                    echo pow($num1,$num2);
                    break;
                case '%':
                    echo $num1 % $num2;
                    break;
            }
            echo "<br><hr><br>";
        }
        function piate(){
            echo "<h3>Zadanie 5</h3>";
            $num1 = rand(1,100);
            $num2 = rand(1,100);
            $num3 = rand(1,100);
            if(pow($num1,2) + pow($num2,2) == pow($num3,2)){
                echo "Liczby $num1, $num2, $num3 są liczbami pitagorejskimi";
            }
            else{
                echo "Liczby $num1, $num2, $num3 nie są liczbami pitagorejskimi";
            }
            echo "<br><hr><br>";
        }
        function szoste($num){
            echo "<h3>Zadanie 6</h3>";
            $zl = $num;
            $dziesiatki = floor($zl/10);
            $zl -= 10*$dziesiatki;
            $piatki = floor($zl/5);
            $zl -= 5*$piatki;
            $dwojki = floor($zl/2);
            $zl -= $dwojki * 2;
            $jedynki = $zl;
            $sum = $dziesiatki + $piatki + $dwojki + $jedynki;
            echo "laczna liczba banknotow i monet to: $sum";
            echo "<br><hr><br>";
        }
        function siodmeZkl($n){
            echo "<h3>Zadanie 7 zwykla</h3>";
            $sil = 1;
            for($i = 1; $i<= $n;$i++){
                $sil *= $i;
            }
            echo $sil;
            echo "<br><hr><br>";
        }
        function siodmeRek($n) {
            if($n<2){
                return 1;
            }
            return $n *= siodmeRek($n-1);
            echo "<br><hr><br>";
        }
        function osme(){
            echo "<h3>Zadanie 8</h3>";
            echo "<form action='index.php' method='post'>";
            echo "<input type='text' name='hex'>";
            echo "<input type='text' name='text'>";
            echo "<input type = 'submit' name='sub'>";
            echo "</form>";
            if(isset($_POST['sub'])){
                $text = $_POST['text'];
                $hex = $_POST['hex'];
                echo "<p style='color: $hex;'>$text</p>";
            }
            echo "<br><hr><br>";
        }
        showName("Kacper");
        drugie(35);
        trzecie(100);
        czwarte(4,5,"**");
        piate();
        szoste(102);
        siodmeZkl(5);
        echo "<h3>Zadanie 7 rekurencja</h3>";
        echo siodmeRek(5);
        osme();
    ?>
</body>
</html>