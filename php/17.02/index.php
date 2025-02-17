<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="tekst">Wprowadź teskt:</label>
        <input type="text" name="tekst"><br>
        <label for="tekst1">Tekst 1: </label>
        <input type="text" name="tekst1"><br>
        <label for="tekst2">Tekst 2: </label>
        <input type="text" name="tekst2"><br>
        <label for="powt">Liczba powtórzeń: </label>
        <input type="number" name="powt"><br>
        <label for="por">Liczba znaków do porównania: </label>
        <input type="number" name="por"><br>
        <button name="submit">Wykonaj</button>
    </form>
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        if($_POST['tekst'] != "" && $_POST['tekst1'] != "" && $_POST['tekst2'] != "" && $_POST['tekst2'] != "" && $_POST['powt'] != "" && $_POST['por'] != ""){
        $t = $_POST['tekst'];
        $t1 = $_POST['tekst1'];
        $t2 = $_POST['tekst2'];
        $powt = (int)$_POST['powt'];
        $por = (int)$_POST['por'];
        echo "Zad1: Dłguość tekstu: ".strlen($t);
        echo "<br>";
        echo "Zad2: Słowo 'PHP' znaleziono na pozycji: ".strpos($t,"PHP");
        echo "<br>";
        echo "Zad3: Zmieniony tekst: ".str_replace("stary","nowy",$t);
        echo "<br>";
        echo "Zad4: Pierwsze 5 znaków: ".substr($t,0,5);
        echo "<br>";
        echo "Zad5: Tekst w wielkich literach: ".strtoupper($t);
        echo "<br>";
        echo "Zad6: Tekst bez białych znaków: "."'".trim($t," \t\n\r\0\x0B")."";
        echo "<br>";
        echo "Zad7: Bezpieczny tekst: ".htmlspecialchars($t);
        echo "<br>";
        echo "Zad8: Połączony tekst: ".$t1." ".$t2;
        echo "<br>";
        echo "Zad9: Powtórzony tekst: ".str_repeat($t,$powt);
        echo "<br>";
        echo "Zad10: Odwrócony tekst: ".strrev($t);
        echo "<br>";
        echo "Zad11: Tekst bez tagów HTML: ".strip_tags($t);
        echo "<br>";
        if(strcmp($t1,$t2) == 0){
            echo "Zad12: Teksty są identyczne";
        }
        else{
            echo "Zad12: Teksty są różne";
        }
        echo "<br>";
        echo "Zad13: Połączony tekst: ".implode(",",explode(" ",$t));
        echo "<br>";
        echo "Zad14: Odkodowany teskt: ".html_entity_decode($t);
        echo "<br>";
        echo "Zad15: Tekst z dużą pierwszą literą: ".ucfirst($t);
        echo "<br>";
        echo "Zad16: Tekst z małą pierwszą literą: ".lcfirst($t);
        echo "<br>";
        echo "Zad17: Tekst z dużymi pierwszymi literami: ".ucwords($t);
        echo "<br>";
        echo "Zad18: Dopasowany tekst: ".str_pad($t,$por,".");
        echo "<br>";
        echo "Zad19: Tekst bez białych znaków z początku: "."'".ltrim($t,$znaki = " \t\n\r\0\x0B")."'";
        echo "<br>";
        echo "Zad20: Tekst bez białych znaków z końca: "."'".rtrim($t,$znaki = " \t\n\r\0\x0B")."'";
        echo "<br>";
        if(strcasecmp($t1,$t2) == 0){
            echo "Zad21: Teksty są identyczne";
        }
        else{
            echo "Zad21: Teksty są różne";
        }
        echo "<br>";
        echo "Zad22: Pierwsze ".$por." znaków jest ";
        if(strncmp($t1,$t2,$por) == 0){
            echo "takie samo";
        }
        else{
            echo "różne";
        }
    }
    else{
        echo "Wypełnij poprawnie formularz";
    }
    }
?>