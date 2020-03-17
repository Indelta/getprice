<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 24.10.2017
 * Time: 10:52
 */

$key_get = $_GET["utm_term"];
quotemeta($key_get);
if($key_get==""){
    header('Location: http://start.getcredit.by');
    exit;
}
?>