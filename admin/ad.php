<?php
$trig=0;
$adminPass= $_POST['passAdmin'];
$keyBuf= $_POST['pirsinid'];
$adminPass= $_POST['passAdmin'];
$host = '127.0.0.1'; // адрес сервера
$database = 'IDENTEFICATION'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysql_connect($host, $user, $password) or die("Ошибка " . mysqli_error($link));
mysql_select_db($database);
$query = mysql_query( "SELECT * FROM 	personIdenteficztion" );

while ( $r = mysql_fetch_assoc( $query ) )
  if ($adminPass==$r['persinPassword'] && $r['persinPassword']=="admin" ){
header('Location:http://autoaaa.ru/admin/editlistuser');
}
 ?>
