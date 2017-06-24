<?php
// Константы базы данных
define("DB_SERVER", "localhost");
define("DB_USER", "id2052229_anna");
define("DB_PASS", "Voronova1302");
define("DB_NAME", "id2052229_db");

$myConnection=mysqli_connect(DB_SERVER,DB_USER, DB_PASS)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! </p>");/*или вывести ошибку*/

mysqli_select_db($myConnection, DB_NAME)//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! </p>");/*или вывести ошибку*/
?>