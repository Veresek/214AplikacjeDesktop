<?php 
    function deleteAllCookies(){
        foreach($_COOKIE as $nazwa => $wartosc){
            setcookie($nazwa, '', time() - 3600);          
        }
    }
?>