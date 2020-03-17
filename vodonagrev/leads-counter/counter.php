<?php
    
    $count_file = file('./leads-counter/leads_count.txt');
    $limit = 5;

    $now = strtotime(date('d.m.Y')); // текущая дата

    if(empty($count_file)) {
        write(1, $now);
        return;
    }
    else {
        $counter = (int)$count_file[0]; // берется из файла (строка 0)
        $last_update = (int)$count_file[1]; // дата последнего обновления (берется из файла, строка 1)
        
        //обновление даты
        if($last_update !== $now) {
            // обнуляем счетчик и обновляем дату
            write(1, $now);
            return;
        }
        else {
            // если лимит достигнут - отправляем письмо менеджеру
            if($counter == $limit - 1) {
                $project = 'getptice.by/vodonagrev';
                $to = "deltaplan.dev@gmail.com, manager.deltaplan.by";
                $sub = '=?utf-8?B?' . base64_encode("информация о лимите с $project") . '?=';
                $headers = "Content-type: text/html; charset=utf-8 \r\n";
                $headers .= "Reply-To: deltaplanirovanie@gmail.com\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                $headers .= "From: $project\r\n";
                $mes = "<h2>Информация о лимите количества лидов на сайте $project</h2>";
                $mes .= "<p>На сайте $project достигнут лимит исходящих заявок в день</p>";
                $mes .= "<p>Количество исходящих заявок - $counter</p>";
                if(mail("$to", "$sub", "$mes", "$headers")) {
                    $fp = fopen('./leads_response.txt', "w");
                    fputs($fp, "count-mail was sended");
                    fclose($fp);
                }
                else {
                    $fp = fopen('./leads_response.txt', "w");
                    fputs($fp, "count-mail was not sended");
                    fclose($fp);
                }
                
                $counter = $counter + 1;
                write($counter, $last_update);
            }
            else {
                $counter = $counter + 1;
               write($counter, $last_update);
            }
            return;
        }
    }
        
    function write($count, $date) {
        $fp = fopen('./leads-counter/leads_count.txt', "w");
        fputs($fp, "$count\r\n$date");
        fclose($fp);
    }
?>