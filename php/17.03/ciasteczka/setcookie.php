<?php 
    setcookie('ciacho', 'szarlotka', time() + 60*60*24);
    setcookie('losowaLiczba', rand(1,49), time() + 3600);
    setcookie('budul', "IS_THE_BEST", time() + 15);
    setcookie('teraz', date('Y:m:d H:i:s'));
    header('location: index.php');
    exit();
?>