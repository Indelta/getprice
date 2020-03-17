<? 
// ----------------------------конфигурация-------------------------- // 

//evroshkaf@list.ru,deltaplanirovanie@gmail.com,getprice.shkafy@gmail.com
$adminemail="dev@deltaplan.by"; // e-mail админа
$from = "evroshkaf.by";
$date=date("d.m.y"); // число.месяц.год 
$time=date("H:i"); // часы:минуты:секунды 
$backurl="http://evroshkaf.by/";  // На какую страничку переходит после отправки письма 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 $headers = 'From: '.$from.'';
$name=$_POST['name']; 
$phone=$_POST['phone']; 
$type=$_POST['type']; 
$comapany=$_POST['organizaciya'];
$comapany1=$_POST['organizaciya2'];
$comapany2=$_POST['organizaciya3'];
$dveri=$_POST['dver'];
$sect=$_POST['sect'];
$system=$_POST['type-shkaf2'];
$system1=$_POST['type-shkaf1']; 
$kolvo=$_POST['system']; 
  
$msg=" 

Имя: $name
Телефон: $phone
Ширина: $comapany см
Высота: $comapany1 см
Глубина: $comapany2 см
Тип шкафа: $system $system2
Расположение:  $kolvo
Количество дверей: $dveri
Количество секций: $sect
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
    
</head>
<body>
<img src="http://evroshkaf.by/img/thx2.png" width="auto" height="auto" style="left: -260px;top: -140px;position: relative;">

</body>
</html>



';
exit; 
 
?>
