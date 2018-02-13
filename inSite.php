<?php
$trig=0;
$keyBuf= $_POST['pirsinid'];
$host = '127.0.0.1'; // адрес сервера
$database = 'IDENTEFICATION'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysql_connect($host, $user, $password) or die("Ошибка " . mysqli_error($link));
mysql_select_db($database);
$query = mysql_query( "SELECT * FROM 	personIdenteficztion" );
while ( $r = mysql_fetch_assoc( $query ) )
  if ($keyBuf==$r['personKey']){
  switch ($r['personType'])
{
    case admin:{
      $trig=1;
    header('Location:http://autoaaa.ru/admin/');
    exit;
      }
    break;

    case client:
    $trig=1;
    echo "your enter a client";
    break;
    case worker:
    $trig=1;
    echo "your enter a worker";
    break;
}
}
if (!$trig)
header('Location:http://autoaaa.ru');


 ?>
