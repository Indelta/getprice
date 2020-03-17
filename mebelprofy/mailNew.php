<?php

    error_reporting(E_ALL);
    ini_set('log_errors', 'On');
    ini_set('error_log', 'php_errors.log');

    function getCheck() {
        $checkFile = fopen("isShum.txt", "r");
        $bul = fgets($checkFile);
        fclose($checkFile);
        return $bul;
    }

    function changeCheck($str) {
        $checkFile = fopen("isShum.txt", "w");
        fwrite($checkFile, $str);
        fclose($checkFile);
        return $str;
    }

?>