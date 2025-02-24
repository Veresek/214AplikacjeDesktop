<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            padding: 20px 40px;
            width: 50%;
            margin: 50px auto 0;
            text-align: center;
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.3);
        }
        button {
            height: 50px;
            border-radius: 10px;
            color: #fff;
            width: 90%;
            background-color: blue;
        }
        label,button,input[type='number']{
            width: 90%;
            margin: 0 auto;
            margin-top: 10px;
            display: block;
        }
        input[type='number']{
            padding: 10px 20px;
            margin-top: 0;
        }
        label{
            text-align: left;
            margin-bottom: 0;
        }
        .inp{
            margin: 0 auto;
            width: 90%;
            text-align: left;
        }
        .wynik {
            width: 50%;
            margin: 200px auto 0;
            text-align: center;
            padding: 50px 100px;
            border-radius: 10px;
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.3);
            p{
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Przelicz wartość produktu</h1>
        <form action="zad2.php" method="post">
            <label for="kwota">Kwota produktu (w zł):</label>
            <input type="number" name="kwota" min="0" value="0" required>
            <label for="waluta">Wybierz walutę:</label>
            <div class="inp"><input type="radio" name="waluta" value="funt" required> Funt brytyjski</div><br>
            <div class="inp"><input type="radio" name="waluta" value="dolar" required> Dolar </div><br>
            <div class="inp"><input type="radio" name="waluta" value="euro" required> Euro</div>
            <button name="submit">Przelicz</button>
        </form>
    </div>
    <?php 
        if(isset($_POST['submit'])){
            $kwota = $_POST['kwota'];
            $waluta = $_POST['waluta'];
            $wynik = 0;
            switch($waluta){
                case 'funt':
                    $wynik =  (string)round($kwota / 5.2,2)." Funtów";
                    break;
                case 'dolar':
                    $wynik = (string)round($kwota / 3.8,2)." USD";
                    break;
                case 'euro':
                    $wynik = (string)round($kwota / 4.5, 2)." Euro";
                    break;
            }
            echo "<div class='wynik'><h1>Wynik przeliczenia</h1><p>Wartość produktu w walucie USD wynosi: $wynik</p></div>";
        }
    ?>
</body>
</html>