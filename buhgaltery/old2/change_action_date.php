<?php
    // если разница между датами из файла action_date.txt и текущей датой составляет меньше месяца,
    // то в файл записывается дата, больше текущей на месяц
    // функция возвращает дату из фала 

    function change_action_date() {
        $action_date = file('action_date.txt')[0];
        $now_date = date('d.m.Y');
        $week = 60*60*24*7;
        $month = 60*60*24*30;
        if ((strtotime($action_date) - strtotime($now_date)) > $month) {
            echo $action_date;
        }
        else {
            $next_date = strtotime($action_date) + $month;
            $fp = fopen('action_date.txt', "w");
            fputs($fp, date('d.m.Y', $next_date));
            fclose($fp);
            echo date('d.m.Y', $next_date);
        }
    }
?>