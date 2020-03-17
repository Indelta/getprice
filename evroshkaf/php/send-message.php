<? 
// ----------------------------конфигурация-------------------------- // 

//deltaplanirovanie@gmail.com,evroshkaf@list.ru,getprice.shkafy@gmail.com
$adminemail="dev@deltaplan.by, deltaplanirovanie@gmail.com"; // e-mail админа
$from = "evroshkaf.by";
$date=date("d.m.y"); // число.месяц.год 
$time=date("H:i"); // часы:минуты:секунды 
$backurl="http://evroshkaf.by/";  // На какую страничку переходит после отправки письма 
 

//---------------------------------------------------------------------- // 
 
$headers = 'From: '.$from.'';  
 
// Принимаем данные с формы 
 
$name=$_POST['name']; 
 
$phone=$_POST['phone']; 
 
$type=$_POST['type']; 

$vrem=$_POST['vrem'];  
  
  
$msg=" 

Имя: $name
Телефон: $phone
Удобное время: $vrem
Отправлено с формы: $type 
"; 
 
  
 
 // Отправляем письмо админу  
 
mail("$adminemail", "Заявка с evroshkaf.by", "$msg" , $headers);

 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script> 
 
 
 
<p></p>";
  print '
<html lang="ru">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Поздравляем! Ваш заказ принят!</title>
    <link type="text/css" rel="stylesheet" href="http://d.zdorovsustav.org/success_files/style000.css"/>
</head>
<body>
<img src="http://evroshkaf.by/img/thx2.png" width="auto" height="auto" style="left: -260px;top: -140px;position: relative;">




</body>
</html>



';
exit; 
 
?>
