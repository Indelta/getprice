<?php
function CheckCurlResponse($code)
{
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
}

//require_once('get.php');

//$rk = 'Не определено';
//$rk = $_GET['utm_campaign'];
//
//if(!empty($_GET['utm_campaign'])){
//    $rk = 'определено';
////    $utm_campaign = $_GET["utm_campaign"];
////    quotemeta($utm_campaign);
////    $rk = $utm_campaign;
////    if ($utm_campaign == 'kms_arenda_samoleta_geo'){
////        $rk = 'КМС Аренда самолёта ГЕО';
////    }
//}

$data=array(
	'name'=>isset($_POST['name']) ? $_POST['name'] : 'Клиент getprice.by/buhgaltery',
	'phone'=>isset($_POST['phone']) ? $_POST['phone'] : '',
);

$dataLead=array(
    'name'=>isset($_POST['name']) ? $_POST['name'] : 'Клиент getprice.by/buhgaltery', // имя
    'phone'=>isset($_POST['phone']) ? $_POST['phone'] : '', // телефон
	'sfera' => isset($_POST['sfera']) ? $_POST['sfera'] : '', // cсфера деятельности организации
	'orgForma' => isset($_POST['orgforma']) ? $_POST['orgforma'] : '', // организационно-правовая форма
	'nalog' => isset($_POST['nalog']) ? $_POST['nalog'] : '', // система налогообложения
	'otchetnost' => isset($_POST['otchetnost']) ? $_POST['otchetnost'] : '', // дополнительная отчетность
	'people' => isset($_POST['people']) ? $_POST['people'] : '', // количество сотрудников компании
);

//$scope_info=array(
//	'it'=>'IT, телекоммуникации, связь, электроника',
//	'auto'=>'Автосервис, автобизнес',
//	'bookkeeping'=>'Бухгалтерия, аудит',
//	'restaurants'=>'Рестораны, фастфуд',
//	'economy'=>'Экономика, финансы'
//);

#Если не указано имя или e-mail контакта - уведомляем
//if(empty($data['name']))
//	die('Не заполнено имя контакта');
//if(empty($data['email']))
//	die('Не заполнен E-mail контакта');
//?>