<?php

$host='localhost'; // ваш хост
$name='barbershop'; // ваша бд
$user='root'; // пользователь бд
$pass='123456'; // пароль к бд

$conn = mysql_connect('localhost', 'root', '123456') or die(mysql_error()); // коннект с сервером бд
mysql_select_db('barbershop', $conn);
// if(!$conn)
// {
//     throw new Exception('Не удалось подключиться к базе данных! Проверьте параметры подключения');
// }
// if(!mysql_select_db($sdd_db_name, $conn)) // выбор бд
// {
//     throw new Exception("Не удалось выбрать базу данных {$ssd_db_name}!");
// }
$result = mysql_query('SELECT * FROM `data_person`', $conn) or die(mysql_error()); // запрос на выборку

if($conn == true) echo "super";
else echo "not db";
// if(!$result)
// {
//     throw new Exception(sprintf('Не удалось выполнить запрос к БД, код ошибки %d, текст ошибки: %s', mysql_errno($conn), mysql_error($conn)));
// }

	// while($row = mysql_fetch_array($result))
	// {
	//     echo '<p>Запись id='.$row['id'].'. Текст: '.$row['text'].'</p>';// выводим данные
	// }
?>