<?php
$host = '127.0.0.1'; // адрес сервера
$database = 'IDENTEFICATION'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
 $db_table ='personIdenteficztion';
$name = $_POST['name'];
$pass = $_POST['pass'];
$type = $_POST['type'];
$key = $_POST['key'];
$link = mysql_connect($host, $user, $password) or die("Ошибка " . mysqli_error($link));
mysql_select_db($database);
$result = mysql_query ("INSERT INTO personIdenteficztion(personKey,personName, personType,persinPassword ) VALUES ('$key','$name','$type',$pass)");

if ($result = 'true'){
         header('Location:http://autoaaa.ru/admin/editlistuser/');
   }else{
       echo "Информация не занесена в базу данных";
   }


?>
