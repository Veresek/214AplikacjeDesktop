<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formularz danych osobowych</h1>
        <form action="index.php" method="post">
            <input type="text" placeholder="imie" name="imie">
            <input type="text" placeholder="nazwisko" name="nazwisko">
            <input type="text" placeholder="klasa" name="klasa">
            <input type="text" placeholder="grupa" name="grupa">
            <button name="submit">Prześlij</button>
        </form>
    <?php  
       $students = [];
       if(isset($_POST['submit'])){
           $imie = $_POST['imie'];
           $nazwisko = $_POST['nazwisko'];
           $klasa= $_POST['klasa'];
           $grupa = $_POST['grupa'];
           $students['imie'] = $imie;
           $students['nazwisko'] = $nazwisko;
           $students['klasa'] = $klasa;
           $students['grupa'] = $grupa;
           echo "<h2>Przekazane dane:</h2>";
           echo "<ul>";
           foreach($students as $key => $value){
               echo "<li>$key: $value</li>";
           }
       }
       echo "</div>";
       echo "<h3>Tablica For i Foreach</h3>";
       $tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4); 
       for($i = 0; $i < sizeof($tablica); $i++){
           echo "$tablica[$i] ";
       }
       echo "<br>";
       foreach($tablica as $liczba){
           echo "$liczba ";
       }
       $min = min($tablica);
       $max = max($tablica);
       $sum = array_sum($tablica);
       $avg = $sum / sizeof($tablica);
       $threes = array_count_values($tablica);
       $parzyste = count(array_filter($tablica, function($x){
           return $x % 2 ==0;
       }));
       $nieparzyste = count(array_filter($tablica, function($x){
           return $x % 2 ==1;
       }));
       $sumparz = array_sum(array_filter($tablica, function($x){
           return $x % 2 ==0;
       }));
       $sumnieparz = array_sum(array_filter($tablica, function($x){
           return $x % 2 ==1;
       }));
       echo "<br>Minimalny: $min <br>";
       echo "Maksymalny: $max <br>";
       echo "Suma: $sum <br>";
       echo "Średnia $avg <br>";
       print_r($tablica);
       echo "Ilość trójek: $threes[3] <br>";
       echo "Parzyste: $parzyste <br>";
       echo "nie parzyste: $nieparzyste <br>";
       echo "suma parzyste: $sumparz <br>";
       echo "suma nieparzyste: $sumnieparz <br>";
       $asoc = ["1"=>1, "2"=>2, "3" => 3];
       sort($asoc);
       print_r($asoc);
       echo "<br>";
       rsort($asoc);
       print_r($asoc);
       $liczby = [];
       for($i = 0; $i < 100;$i++){
           $liczby[$i] = rand(0,10000);
       }
       echo "<ul>";
       foreach($liczby as $liczba){
           echo "<li>$liczba</li>";
       }
       echo "</ul> <br>";
       $liczbparz = count(array_filter($liczby, function($x){
           return $x % 2 ==0;
       }));
       $liczbnieparz =count(array_filter($liczby, function($x){
           return $x % 2 ==1;
       })); 
       $liczbmax = max($liczby);
       $liczbmin = min($liczby);
       $liczbyavg = array_sum($liczby) / count($liczby);
       echo "parzyste: $liczbparz <br>";
       echo "nieparzyste: $liczbnieparz <br>";
       echo "maksymalna: $liczbmax<br>";
       echo "minimalna: $liczbmin<br>";
       echo "średnia: $liczbyavg<br>";
   
       $europa = [
           "Włochy" => "Rzym",  
           "Belgia" => "Bruksela", 
           "Dania" => "Kopenhaga",  
           "Finlandia" => "Helsinki", 
           "Francja" => "Paryż",  
           "Niemcy" => "Berlin", 
           "Rosja" => "Moskwa",  
           "Polska" => "Warszawa", 
           "Hiszpania" => "Madryt",  
           "Portugalia" => "Lizbona", 
           "Holandia" => "Amsterdam",  
           "Szwecja" => "Sztokholm", 
           "Norwegia" => "Oslo",  
           "Szwajcaria" => "Berno", 
           "Austria" => "Wiedeń",  
           "Grecja" => "Ateny", 
           "Czechy" => "Praga",  
           "Węgry" => "Budapeszt" 
       ]; 
       ksort($europa);
       foreach($europa as $key => $value){
           echo "Kraj: $key, stolica: $value <br>";
       };
    ?>
</body>
</html>