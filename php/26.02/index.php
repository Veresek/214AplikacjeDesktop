<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h2>Data i czas</h2>
    <?php 
        $znaczTeraz = time();
        echo "<p>Od 1 stycznia 1970 roku minęło $znaczTeraz sekund</p>";
        $arrTeraz = getdate();
        echo "<pre>";
        print_r($arrTeraz);
        echo "</pre>";
        $znaczPlus4weeks = strtotime("+4 weeks");
        echo "$znaczPlus4weeks<br>";
        $arrPlus4weeks = getdate($znaczPlus4weeks);
        echo "<pre>";
        print_r($arrPlus4weeks);
        $weekDay = $arrPlus4weeks["weekday"];
        echo "</pre>";
        echo "Za 4 tygodnie będzie:".$weekDay." ".date("d:m:Y H-i-s", $znaczPlus4weeks);
    ?> -->
    <hr>
    <h1>Zad 1</h1>
    <?php
        $dnitygodnia = ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"];
        $pora = date("a") == "am" ? "przed południem" : "po południu";
        $miesiac = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];
        echo "<p>A. Dzisiaj jest ".date("d.m.Y")." godzina ".date("G:i:s")."</p>";
        echo "<p>B. Dzisiaj jest ".date("y-m-d")." godzina ".date("g:i")." $pora</p>";
        echo "<p>C. Dzisiaj jest ".date("d")." ".$miesiac[date('m') -1]." ".date("Y")." godzina ".date("G:i:s")."</p>";
        echo "<p>D. Dzisiaj jest ".$dnitygodnia[date("w")-1]." ".date("d/m/Y")."</p>";
    ?>
    <h1>Zad 2</h1>
    <h3>Wprowadź swoją datę urodzenia</h3>
    <form action="index.php" method="post">
        <label for="uro">Data urodzenia: </label>
        <input type="date" name="uro" id="uro">
        <button name="submit">Sprawdź</button>
    </form>
    <h3>Informacje o Twoich urodzinach</h3>
    <?php 
        if(isset($_POST['submit'])){
            $data = $_POST['uro'];
            $data = strtotime($data);
            getdate($data);
            $dayofyear = date("z", $data);
            $dayofyearnow = date("z");
            $dni = $dayofyear - $dayofyearnow;
            if($dni < 0){
                $dni = 365 + $dni;
            }
            $dnitygodnia = ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"];
            echo "Urodziłeś/aś się w: ".$dnitygodnia[date("w", $data)-1]."<br>";
            echo "Do Twoich następnych urodzin zostało: ".$dni." dni";
        }
    ?>
</body>
</html>