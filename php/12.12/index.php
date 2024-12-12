<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Zadanie 1</legend>
            <label for="wybor">Wybierz walute:</label>
            <select name="wybor" id="wybor">
                <option value="euro">euro</option>
                <option value="dolar">dolar</option>
                <option value="funt">funt</option>
            </select><br>
            <label for="iloscZlotych">Podaj ilość złotych:</label>
            <input type="text" name="iloscZlotych" id="iloscZlotych">
            <input type="submit" value="Przelicz" name="zad1Submit">
            <?php
            if(isset($_POST['zad1Submit'])){
                $wybor = $_POST['wybor'];
                $iloscZlotych = $_POST['iloscZlotych'];
                switch($wybor){
                    case 'euro':
                        $result = $iloscZlotych/4.3;
                        $result = round($result,2);
                        echo "<br>$iloscZlotych złotych to $result euro";
                        break;
                    case 'dolar':
                        $result = $iloscZlotych/4.05;
                        $result = round($result,2);
                        echo "<br>$iloscZlotych złotych to $result dolarow";
                        break;
                    case "funt":
                        $result = $iloscZlotych/5;
                        $result = round($result,2);
                        echo "<br>$iloscZlotych złotych to $result funtow";
                        break;
                }
            }
            ?>
        </fieldset>

            <fieldset>
                <legend>Zadanie 2</legend>
                <label for="zad2">Wpisz numer miesiaca: </label>
                <input type="number" id="zad2" name="zad2">
                <input type="submit" name="zad2Submit">
                <?php 
                    if(isset($_POST['zad2Submit'])){
                        $nr = $_POST['zad2'];
                        switch($nr){
                            case 1:
                                echo "<br> Styczeń";
                                break;
                            case 2:
                                echo "<br> Luty";
                                break;
                            case 3:
                                echo "<br> Marzec";
                                break;
                            case 4:
                                echo "<br> Kwiecień";
                                break;
                            case 5:
                                echo "<br> Maj";
                                break;
                            case 6:
                                echo "<br> Czerwiec";
                                break;
                            case 7:
                                echo "<br> Lipiec";
                                break;
                            case 8:
                                echo "<br> Sierpień";
                                break;
                            case 9:
                                echo "<br> Wrzesień";
                                break;
                            case 10:
                                echo "<br> Październik";
                                break;
                            case 11:
                                echo "<br> Listopad";
                                break;
                            case 12:
                                echo "<br> Grudzień";
                                break;
                            default:
                            echo "<br> Podaj prawidłową liczbe z zakresu od 1-12";
                            break;
                        }
                    }
                ?>
            </fieldset>
            <fieldset>
                <legend>Zadanie 3</legend>
                <label for="grade">Wpisz ocenę: </label>
                <input type="number" name="grade" id="grade">
                <input type="submit" value="Sprawdź" name="zad3Submit">
                <?php 
                    if(isset($_POST['zad3Submit'])){
                        $grade = $_POST['grade'];
                        switch($grade){
                            case 1:
                                echo "<br> Brak promocji do następnej klasy";
                                break;
                            case $grade >=2 && $grade <=5:
                                echo "<br> Promocja do następnej klasy";
                                break;
                            case 6:
                                echo "<br> Promocja z oceną celującą";
                                break;
                            default:
                            echo "<br>Podaj poprawną ocenę z zakresu 1-6";
                            break;
                        }
                    }
                ?>
            </fieldset>
            <fieldset>
                <legend>Zadanie 4</legend>
                <label for="age">Wpisz swój wiek:</label>
                <input type="number" name="age" id="age">
                <input type="submit" value="Sprawdź" name="zad4Submit">
                <?php 
                    if(isset($_POST['zad4Submit']))
                    {
                        $age = $_POST['age'];
                        switch($age){
                            case $age >= 35:
                                echo "<br>Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
                                break;
                            case $age >= 30:
                                echo "<br>Możesz głosować i kandydować do Sejmu i Senatu";
                                break;
                            case $age >= 21:
                                echo "<br>Możesz głosować i kandydować do Sejmu";
                                break;
                            case $age >= 18:
                                echo "<br>Możesz tylko głosować";
                                break;
                            default:
                            echo "<br>Jeszcze nie możesz głosować";
                            break;
                        }
                    }
                ?>
            </fieldset>
            <fieldset>
                <legend>Zadanie 5</legend>
                <label for="miesiac">Wpisz nr miesiaca:</label>
                <input type="text" name="miesiac" id="miesiac">
                <input type="submit" value="Sprawdź" name="zad5Submit">
                <?php 
                    if(isset($_POST['zad5Submit'])){
                        $miesiac = $_POST['miesiac'];
                        switch($miesiac){
                            case $miesiac >=1 && $miesiac <= 3:
                                echo "<br>Kwartał I";
                                break;
                            case $miesiac >=4 && $miesiac <= 6:
                                echo "<br>Kwartał II";
                                break;
                            case $miesiac >=7 && $miesiac <= 9:
                                echo "<br>Kwartał III";
                                break;
                            case $miesiac >=10 && $miesiac <= 12:
                                echo "<br>Kwartał IV";
                                break;
                            default:
                            echo "<br> Błędny numer miesiąca";
                            break;
                        }
                    }
                ?>
            </fieldset>
    </form>
</body>
</html>