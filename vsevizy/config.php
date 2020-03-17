<?php
/**
 * Created by PhpStorm.
 * User: Designer
 * Date: 10.01.2017
 * Time: 18:58
 */
$host = 'localhost';
$user = 'retsolme_getpric';
$pass = 'Vai5chah';
$db = 'retsolme_getprice';

$connect = new mysqli($host, $user, $pass, $db);
mysqli_set_charset($connect, "utf8");
?>