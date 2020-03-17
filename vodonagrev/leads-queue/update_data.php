<?php
// обновление данных в json файле с данными раз в сутки

// данные по умолчанию
$default_data_array = [
    "site1_leads" => 0,
    "site2_leads" => 0,
    "all_leads" => 0,
    "limit" => 5,
    "trigger" => 1,
    "last_update" => date('d.m.Y')
];

$j_data = json_decode(file_get_contents('data.json'));
$last_update = strtotime($j_data->last_update);
$actual_date = strtotime(date('d.m.Y'));

if($actual_date !== $last_update) {
    $file = fopen('data.json', 'w');
    fputs($file, json_encode($default_data_array));
    fclose($file); 
}


?>