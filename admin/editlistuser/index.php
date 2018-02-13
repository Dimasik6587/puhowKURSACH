<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <title>Автосервис ААА</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
  </head>
  <body>

    <ul class="nav nav-tabs">
      <li role="presentation"><a href="http://autoaaa.ru">Вход</a></li>
      <li role="presentation" class="active"><a href="#">Профиль</a></li>
      <li role="presentation"><a href="#">Обратная связь</a></li>
    </ul>




    <div class="row" >
    <div class="col-xs-4 col-md-4">
    </div>
    <div class="col-xs-4 col-md-6">
      <form method="POST" action="edit.php">
          <h3>Внесение пользователя в базу</h3>
              <input name="name" type="text" placeholder="Имя"/>
              <input name="pass" type="text" placeholder="пароль"/>
              <input name="type" type="text" placeholder="тип пользователя"/>
              <input name="key" type="text" placeholder="ключ"/>

              <input type="submit" value="Добавить"/>
          </form>

    </div>
    </div>
  </div>
  <table class="table">
    <tr><th>Ключ</th><th>Имя</th></tr>
<?php
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
      echo '<tr>','<td>',$r['personKey'],'</td>','<td>', $r['personName'] ,'</td>','</tr>';
?>
       </table>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
