<?php

$sfera = $dataLead['sfera'];
$org_forma = $dataLead['orgforma'];
$nalog = $dataLead['nalog'];
$people = $dataLead['people'];
$sfera_id = "";
$org_forma_id = "";
$nalog_id = "";
$people_id = "";
switch($sfera) {
    case "Торговля (опт/розница)":
        $sfera_id = 1202119;
        break;
    case "Производство":
        $sfera_id = 288297;
        break;
    case "Оказание услуг":
        $sfera_id = 288295;
        break;
    case "Строительство":
        $sfera_id = 288299;
        break;
    case "Другое":
        $sfera_id = 292905;
        break;
    default: 
        $sfera_id = 292905;
};

switch($org_forma) {
    case "ООО":
        $org_forma_id = 1203651;
        break;
    case "ЧТУП":
        $org_forma_id = 1203649;
        break;
    case "ЗАО":
        $org_forma_id = 1203657;
        break;
    case "ИП":
        $org_forma_id = 1203663;
        break;
    case "Иностранное предприятие":
        $org_forma_id = 1203681;
        break;
    default:
        $org_forma_id = 1203681;
};

switch($nalog) {
    case "УСН":
        $nalog_id = 309943;
        break;
    case "УСН+НДС":
        $nalog_id = 309941;
        break;
    case "Общая":
        $nalog_id = 309939;
        break;
    case "Единый налог":
        $nalog_id = 309949;
        break;
    default:
        $nalog_id = 309951;
};


if((int)$people > 0 && (int)$people < 5) {
    $people_id = 288341;
}
else if((int)$people < 10) {
    $people_id = 288343;
}
else if((int)$people < 20) {
    $people_id = 288345;
}
else if ((int)$people < 50) {
    $people_id = 288347;
}
else if ((int)$people > 50 && (int)$people < 100) {
    $people_id = 288349;
}
else if ((int)$people > 100) {
    $people_id = 288351;
}
else {
    $people_id = 292903;
}


$leads['request']['leads']['add']=array(
    array(
        'name'=>'Новый лид с сайта getprice.by/buhgaltery',
        'tags' => 'заявка - getprice.by/buhgaltery', #Теги
        'custom_fields'=>array(
            array(
                'id' => 136537,
                'values' => array(
                    array(
                        'value' => $sfera_id
                    )
                )
            ),
            array(
                'id' => 589049,
                'values' => array(
                    array(
                        'value' => $org_forma_id
                    )
                )
            ),
            array(
                'id' => 146971,
                'values' => array(
                    array(
                        'value' => $nalog_id
                    )
                )
            ),
            array(
                'id' => 580099,
                'values' => array(
                    array(
                        'value' => $dataLead['otchetnost']
                    )
                )
            ),
            array(
                'id' => 136555,
                'values' => array(
                    array(
                        'value' => $people_id
                    )
                )
            ),
        )
    ),
);

#Формируем ссылку для запроса
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';
$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($leads));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);

$Response=json_decode($out,true);
$newleadid = $Response['response']['leads']['add'][0]['id'];

/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
//$Response=json_decode($out,true);
//$Response=$Response['response']['contacts']['add'];
//
//$output='ID добавленных контактов:'.PHP_EOL;
//foreach($Response as $v)
//	if(is_array($v))
//		$output.=$v['id'].PHP_EOL;
//return $output;

$code=(int)$code;
$errors=array(
    301=>'Moved permanently',
    400=>'Bad request',
    401=>'Unauthorized',
    403=>'Forbidden',
    404=>'Not found',
    500=>'Internal server error',
    502=>'Bad gateway',
    503=>'Service unavailable'
);
try
{
    #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
    if($code!=200 && $code!=204)
        throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
}
catch(Exception $E)
{
    die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
}

/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$Response=json_decode($out,true);
$Response=$Response['response']['leads']['add'];

$output='ID добавленных сделок:'.PHP_EOL;
$newleadid = '';
foreach($Response as $v) {
    if(is_array($v)) {
        $output.=$v['id'].PHP_EOL;
        $newleadid = $v['id'];
    }
}
    
        
return $output;
?>