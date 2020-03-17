<?php

    // берем json файл с данными
    $j_string = file_get_contents('data.json');
    $data_array = json_decode($j_string);

   // записываем данные в переменные

   // количество лидов для первого сайта (лимитированного)
    $site1_leads = $data_array->site1_leads;
    // количество лидов для второго сайта
    $site2_leads = $data_array->site2_leads;
    // количество всех лидов
    $counter = $data_array->all_leads;
    // лимит лидов в день для первого сайта
    $limit = $data_array->limit;
    // переключатель направления лидов
    $trigger = $data_array->trigger;

    
    /* 
        если у первого сайта не достигнут лимит лидов - отправляем заявки по очереди на два сайта 
    */
    if($site1_leads < $limit) {
        if($trigger) {
            // отправка письмо и данные в таблицу для первого сайта (лимит)
            include 'leads_limit.php';
            
            $data_array->site1_leads += 1;
        }
        else {
            // отправка письмо и данные в таблицу для второго сайта
            include 'leads_unlim.php';
            
            $data_array->site2_leads += 1;
        }
    }
    // иначе отправляем заявки только на второй сайт
    else {
        // отправка письмо и данные в таблицу для второго сайта
        include 'leads_unlim.php';
        $data_array->site2_leads += 1;
    }

    // увеличиваем число всех лидов
    $data_array->all_leads += 1;
    // изменяем переключатель
    $data_array->trigger = (int)!$trigger;

    


    // записываем новые данные в json файл с данными
    $j_file = fopen('data.json', 'w');
    fputs($j_file, json_encode($data_array));
    fclose($j_file);

?>