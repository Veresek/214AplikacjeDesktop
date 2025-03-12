<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="text">Informacja: </label>
        <input type="text" name="text" required> <br>
        <button type="submit" name="submit">Dodaj</button>
    </form>
    <?php 
        //  $plik = fopen('sekret.txt','r');
        //  $i = 0;
        //  $tab = array();
        //  while (!feof($plik)){
        //     $tab[$i] = fgets($plik);
        //     echo $tab[$i].'<br>';
        //     $i++;
        //  }
        //  fclose($plik);
        $plik = fopen('dane.txt','w');
        for( $i = 0; $i < 15; $i++ ){
            fwrite($plik, rand(1,50)."\n");
        }
        fclose($plik);
        $plik = fopen("dane.txt","r");
        $tab = array();
        for($i = 0; !feof($plik);$i++){
            $x = fgets($plik);
            if($x % 2 == 0){
                $tab[$i] = $x;
                echo $tab[$i]."<br>";
            }
        }
        $sum = array_sum($tab);
        $wynik = fopen("wynik.txt","w");
        fputs($wynik,$sum);
    ?>
</body>
</html>