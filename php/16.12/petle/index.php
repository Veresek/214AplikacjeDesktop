<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle</title>
</head>
<body>
    <h2>Pętle w PHP</h2>
    <?php 
        //1
        function pierwsze() {
            echo "<h3>Zadanie 1</h3>";
            $j = 1;
            echo "<table>";
            for($i = 1; $i<=3;$i++){
                echo "<tr>";
                for($j;$j<$i*10+1;$j++){
                    echo "<td>$j</td>";
                }
                echo "</tr>";
            }
            echo "</table>"; 
            echo "<br><hr><br>";
        }
        //2
        function drugie(){
            echo "<h3>Zadanie 2</h3>";
            $i = -1;
            while($i<49){
                echo $i+=2;
                echo "<br>";
            }
            echo "<br>";
            for($j = 1;$j<50;$j+=2){
                echo "$j <br>";
            }
            echo "<br>";
            $k = -1;
            do{
                $k+=2;
                echo "$k <br>";
            }while($k < 49);
            echo "<br><hr><br>";
        }        
        //3
        function trzecie(){
            echo "<h3>Zadanie 3</h3>";
            for($n = 10; $n > 0;$n--){
                echo "$n<sup>2</sup> = ".pow($n,2);
                echo "<br>";
            }
            echo "<br>";
            for($n = 10; $n>0;$n--){
                if($n %2 == 0){
                    echo "$n<sup>2</sup> = ".pow($n,2);
                    echo "<br>";
                }
            }
            echo "<br><hr><br>";
        }
        //4
        function czwarte(){
            echo "<h3>Zadanie 4</h3>";

            echo "<br><hr><br>";
        }
        //5
        function piate(){
            echo "<h3>Zadanie 5</h3>";
            echo "<form action='index.php' method='post'>";
            echo "<input type='number' name='inp'>";
            echo "<input type = 'submit' name='sub'>";
            echo "</form>";
            if(isset($_POST['sub'])){
                $inp = $_POST['inp'];
                $dziel = 0;
                for($i = 2; $i<$inp;$i++){
                    if($inp % $i == 0){
                        $dziel++;
                    }
                }
                if($dziel != 0){
                    echo "<br>Liczba nie jest liczbą pierwszą";
                }
                else{
                    echo "<br>Liczba jest liczbą pierwszą";
                }
            }
            echo "<br><hr><br>";
        }
        //6
        function szoste(){
            echo "<h3>Zadanie 6</h3>";
            for($i = 10; $i >= 0;$i--){
                echo "<br>$i";
            }
            echo "<br><hr><br>";
        }
        //7
        function siodme(){
            echo "<h3>Zadanie 7</h3>";
            for($i = 10; $i >= 0;$i -= 0.5){
                echo "<br>$i";
            }
            echo "<br><hr><br>";
        }
        //8
        function osme(){
            echo "<h3>Zadanie 8</h3>";
            $i = 1;
            while($i <= 10){
                echo "PHP$i ";
                $i++;
            }
            echo "<br><hr><br>";
        }
        //9
        function dziewiate(){
            echo "<h3>Zadanie 9</h3>";
            $i = 1;
            echo "<ul>";
            do{
                echo "<li>Element nr $i</li>";
                $i++;
            }while($i <= 4);
            echo "</ul>";
            echo "<br><hr><br>";
        }
        //10
        function dziesiate(){
            echo "<h3>Zadanie 10</h3>";
            $sum = 0;
            for($i = 0; $i<=10;$i++){
                if($i %2 == 0){
                    continue;
                }
                else{
                    $sum += $i;
                }
            }
            echo "Suma: $sum";
            echo "<br><hr><br>";
        }
        function jedenaste(){
            echo "<h3>Zadanie 11</h3>";
            for($i = 1; $i<10;$i++){
                if($i != 4){
                    if($i != 9){
                        echo "$i-";
                    }
                    else{
                        echo "$i";
                    }
                }
            }
            echo "<br><hr><br>";
        }
        pierwsze();
        drugie();
        trzecie();
        czwarte();
        piate();
        szoste();
        siodme();
        osme();
        dziewiate();
        dziesiate();
        jedenaste();
    ?>
</body>
</html>