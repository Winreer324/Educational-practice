<?php

/*
	Создание класса подключения к базе данных
*/
class DBConnection
{
	protected $conn; //поле класса, которые создано для хранения подключения к MySQL

	protected $defaults = [ //ассоциативный массив параметров используемых при настройке подключения к БД
		'host' => 'localhost', //на локальном сервере адрес хоста - localhost
		'user' => 'root', //пользователь в БД (root по умолчанию)
		'pass' => '123456', //пароль пользователя БД (по умолчанию у root'a не установлен)
		'db' => 'barbershop', //название вашей БД в phpMyAdmin (MySQL)
		'charset' => 'utf8', //используемая в БД кодировка символом
	];

	const FETCH_MODE = MYSQLI_ASSOC; //константа, которая хранит вид массива, в который попадут данные из результата запроса к MySQL

	public function __construct() //конструктор класса, вызывается при создании экземпляра класса
	{
		$opt = [];
		$opt = array_merge($this->defaults, $opt); //опции записанные в поле класса defaults записываются в $opt для удобства работы
		$this->conn = new mysqli($opt['host'], $opt['user'], $opt['pass'], $opt['db']); //в поле класса $conn записывается подключение к БД и хранится там
		if (!$this->conn) exit('Lost DB connection'); //если подключение false, то происходит выход из скрипта с ошибкой
		$this->conn->set_charset($opt['charset']); //подключению задаётся определённая нами кодировка для избежания ошибок при работе с данными, которые записываем и получаем из БД
	}

	public function makeUnpreparedQuery($myQuery) //функция, которая позволяет выполнить неподготовленный запрос, на вход принимает обычный SQL-запрос
	{
		$q=$this->conn->query($myQuery); //обращаемся к нащему подключению к БД и вызываем query(), который выполняет запрос и возвращает результирующий набор полученный от БД, который дальше надо обработать, если в запросе ошибка, то вернёт false
		if($q) return $q;
		else return null;
	}
 
	public function makePreparedQuery($table, $operationType, $rowId = "", $valuesTypes = "", $fields = "", $values = "")
	{
		if($operationType == 'delete'){
			$query = "DELETE FROM $table WHERE id_data_person=$rowId ; ";
			// $stmt->execute();
			$stmt = $this->conn->prepare($query);
			// $sql = "DELETE FROM pages WHERE id=$id"; 
			$stmt->execute(); 
			var_dump("delete this row");
		}else var_dump("error delete");

		if ($operationType == 'insert')
		{
			// $query = "INSERT INTO $table ($impFields) VALUES ($impPlaceholders)";
			$fname = $values[0];
			$lname = $values[1];
			$sname = $values[2];
			$phone = $values[3];

			// var_dump($fname);
			$query = "INSERT INTO $table  (`id_data_person`, `phone`, `Fname`, `Lname`, `Sname`) VALUES (NULL, '$phone', '$fname', '$lname', '$sname');";
			// -- $query = "INSERT INTO `data_person`  (`id_data_person`, `phone`, `Fname`, `Lname`, `Sname`) VALUES (NULL, 'phone', 'fname', 'lname', 'sname');";
			var_dump($query);
			$stmt = $this->conn->prepare($query);  //подготавливается запроc
			$stmt->execute(); //запрос выполняется 
		}else var_dump("error insert");

		if ($operationType == 'update')
		{
			$arr = json_decode($values, true);
			var_dump($arr);
			$id = $arr[0];
			$fname = $arr[1];
			$lname = $arr[2];
			$sname = $arr[3];
			$phone = $arr[4];

			var_dump($values);
			var_dump($id);
			var_dump($fname);
			var_dump($lname);
			var_dump($sname);
			var_dump($phone);

			$query = "UPDATE $table SET `id_data_person`='$id',`phone`=$phone,`Fname`='$fname',`Lname`='$lname',`Sname`='$sname' WHERE `id_data_person`='$id' ;";
			  
			var_dump($query);
			$stmt = $this->conn->prepare($query);  //подготавливается запроc
			$stmt->execute(); //запрос выполняется 
		} else var_dump("error update");
	}
	public function fetch($result) //данная функция позволяет преобразовать результат полученный из MySQL в ассоциативный массив, принимает на вход результат запроса к MySQL
	{
		return  $result->fetch_all($mode  = self::FETCH_MODE);
	}
}
