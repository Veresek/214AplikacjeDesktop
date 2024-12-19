<?php 
        if(isset($_POST['sub'])){
            if(!empty($_POST['cost']) && !empty($_POST['km']) && !empty($_POST['avg'])){
                $cost = htmlspecialchars($_POST['cost']);
                $km = $_POST['km'];
                $avg = htmlspecialchars($_POST['avg']);
                $trip = round(($km/100)*$avg*$cost,2);
                echo "<h2>Obliczone koszty przejazdu:</h2>";
                echo"<p><strong>Podane dane:</strong><br></p>";
                echo "<p>Koszt benzyny (za litr): $cost PLN<br></p>";
                echo "<p>Ilość kilometrów: $km km<br></p>";
                echo "<p>Średnie sspalanie: $avg l/100km<br></p>";
                echo "<p><strong>Koszt przejazdu: $trip PLN</strong></p>";
                echo"<br><br><br>";
                echo"<a href='przejazd.html'>Wróć do formularza</a>";
            }
            else{
                echo "<br>Wypełnij poprawnie wszystkie pola";
            }
        }
?>