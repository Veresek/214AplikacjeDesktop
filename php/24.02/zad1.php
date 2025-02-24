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
        input,label,button{
            display: block;
        }
        input,button{
            margin: 10px auto;
        }
        label{
            width: 90%;
            margin: 10px auto 0;
            text-align: left;
        }
        input {
            margin-top: 0;
            width: 90%;
            padding: 10px 20px;
        }

        button {
            height: 50px;
            border-radius: 10px;
            color: #fff;
            width: 90%;
            background-color: blue;
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
        <h1>Zakup zeszytów</h1>
        <form action="zakup.php" method="post">
            <label for="linia">Zeszyty w linię (1,5zł/szt.):</label>
            <input type="number" name="linia" min="0" value="0" required>
            <label for="kratka">Zeszyty w kratkę (1,3zł/szt.):</label>
            <input type="number" name="kratka" min="0" value="0" required>
            <label for="gładkie">Zeszyty gładkie (1zł/szt.):</label>
            <input type="number" name="gładkie" min="0" value="0" required>
            <button name="submit">Oblicz wartość zakupu</button>
        </form>
    </div>
    <?php 
        if(isset($_POST['submit'])){
            $linia = ($_POST['linia']);
            $kratka = ($_POST['kratka']);
            $gładkie = ($_POST['gładkie']);
            $suma = round($linia*1.5 + $kratka*1.3 + $gładkie,2);
            echo "<div class='wynik'><h1>Wartość zakupu</h1><p>Łączna wartość zakupu wynosi: $suma zł</p></div>";
        }
    ?>
</body>

</html>