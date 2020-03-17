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


//Имя
$name = '';
if (isset($_POST['name'])){
    $name= $_POST['name'];
} else {
    $name= 'Клиент getprice.by/kuhni';
}

//Телефон
$phone = '';
if (isset($_POST['phone'])){
    $phone= $_POST['phone'];
} else {
    $phone= 'Не определено';
}

//E-mail
$email = '';
if (isset($_POST['email'])){
    $email= $_POST['email'];
} else {
    $email= 'Не определено';
}

//Комментарии
$komments = "";
$phone = $_POST['phone'];
if (isset($_POST['price'])){
    $komments.= 'Стоимость: ' . $_POST['price'];
}
if (isset($_POST['easyeay'])){
    $komments.= ' Удобный способ связи: ' . $_POST['easyeay'];
}
$komments.=" тел. $phone";

//Размер
$razmer = '';
if (isset($_POST['kuhSize'])){
    $razmer= $_POST['kuhSize'];
} else {
    $razmer= 'Не определено';
}


//Тип кухни
$tip = "";
if (isset($_POST['kuhType'])){
    if($_POST['kuhType']=='Линейная'){
        $tip = 622603;
    } elseif ($_POST['kuhType']=='Двухлинейная'){
        $tip = 619479;
    } elseif ($_POST['kuhType']=='Угловая'){
        $tip = 619471;
    } elseif ($_POST['kuhType']=='П-образная'){
        $tip = 619475;
    } elseif ($_POST['kuhType']=='G-образная'){
        $tip = 619481;
    } elseif ($_POST['kuhType']=='Островная'){
        $tip = 619477;
    }
} else {
    $tip= 'Не определено';
}

//Способ оплаты
$oplata = "";
if (isset($_POST['oplata'])){
    if($_POST['oplata']=='Оплата одним платежом'){
        $oplata = 646375;
    } elseif ($_POST['oplata']=='Оплата в 2 платежа'){
        $oplata = 620551;
    } elseif ($_POST['oplata']=='В рассрочку до 12 месяцев'){
        $oplata = 620549;
    } elseif ($_POST['oplata']=='В рассрочку по карте Халва (до 6 месяцев)'){
        $oplata = 620547;
    }
}

//Стиль кухни
$style = "";
if (isset($_POST['kuhStyle'])){
    if($_POST['kuhStyle']=='Классика'){
        $style = 622605;
    } elseif ($_POST['kuhStyle']=='Модерн'){
        $style = 622607;
    } elseif ($_POST['kuhStyle']=='Минимализм'){
        $style = 622609;
    } elseif ($_POST['kuhStyle']=='Неоклассика'){
        $style = 622611;
    } elseif ($_POST['kuhStyle']=='Хай-тек'){
        $style = 622613;
    } elseif ($_POST['kuhStyle']=='Мой собственный'){
        $style = 622615;
    }
} else {
    $style = 'Не определено';
}

//Форма
$forma = '';
if (isset($_POST['type'])){
    $forma = $_POST['type'];
} else {
    $forma = 'Не определено';
}


$data=array(
    'name'=>$name,
    'phone'=>$phone,
    'email'=>$email
);

$dataLead=array(
    'name'=>$name,
    'phone'=>$phone,
    'email'=>$email,
    'razmer'=>$razmer,
    'tip'=>$tip,
    'style'=>$style,
    'forma'=>$forma,
    'oplata'=>$oplata,
    'komments'=>$komments
);