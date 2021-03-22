<?php
   
    deleteAllCookies();
    function deleteAllCookies(){

        header("location: startGame.php");
        session_abort();
        exit();
    }
?>