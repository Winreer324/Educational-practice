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
		'pass' => '', //пароль пользователя БД (по умолчанию у root'a не установлен)
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
		$getTable = $_POST['getTable'];
		$getIDTable = $_POST['idTable']; 

		if($operationType == 'delete'){ 
			$query = "DELETE FROM $table WHERE `$getIDTable`='$rowId' ; ";
			$stmt = $this->conn->prepare($query); 
			$stmt->execute();  
		}else var_dump("error delete");

									//update
			//data_person
			if ($table == 'data_person' && $operationType == 'update')
			{
				$arr = json_decode($values, true); 
				$id = $arr[0];
				$fname = $arr[1];
				$lname = $arr[2];
				$sname = $arr[3];
				$phone = $arr[4]; 

				$query = "UPDATE $table SET `$getIDTable`='$id',`phone`='$phone',`Fname`='$fname',`Lname`='$lname',`Sname`='$sname' WHERE `$getIDTable`=$id;";
				  
				var_dump($query);
				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется 

			} else var_dump("error update"); 
			//data_person

			//date_visit
			if ($table == 'date_visit' && $operationType == 'update')
			{
				$arr = json_decode($values, true); 
				$id = $arr[0];
				$visitors_id = $arr[1];
				$date = $arr[2]; 

				$query = "UPDATE $table SET `$getIDTable`='$id',`visitors_id`='$visitors_id',`date`='$date' WHERE `$getIDTable`=$id;";
				   
				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется 

			} else var_dump("error update"); 
			//date_visit

			//services
			if ($table == 'services' && $operationType == 'update')
			{
				$arr = json_decode($values, true); 
				$id = $arr[0];
				$services_date_visit_id = $arr[1];
				$services = $arr[2];  

				$query = "UPDATE $table SET `$getIDTable`='$id',`services_date_visit_id`='$services_date_visit_id',`services`='$services' WHERE `$getIDTable`=$id;";
				   
				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется 
			} else var_dump("error update"); 
			//services

			//staff
			if ($table == 'staff' && $operationType == 'update')
			{
				$arr = json_decode($values, true); 
				$id = $arr[0];
				$position = $arr[1];
				$salary = $arr[2];  
				$data_person_id = $arr[3];  

				$query = "UPDATE $table SET `$getIDTable`='$id',`position`='$position',`salary`='$salary',`data_person_id`='$data_person_id' WHERE `$getIDTable`='$id';";
				  
				var_dump($query);
				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется 

			} else var_dump("error update"); 
			//staff

			//visitors
			if ($table == 'visitors' && $operationType == 'update')
			{
				$arr = json_decode($values, true); 
				$id = $arr[0];
				$date_visit_id = $arr[1];
				$data_person_id = $arr[2];  
				$services_id = $arr[3];  

				$query = "UPDATE $table SET `$getIDTable`='$id',`date_visit_id`='$date_visit_id',`data_person_id`='$data_person_id',`services_id`='$services_id' WHERE `$getIDTable`=$id;";
				  
				var_dump($query);
				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется 
			} else var_dump("error update"); 
			//visitors
										//insert
			//data_person
			if ($table == 'data_person' && $operationType == 'insert')
			{ 
				$fname = $values[0];
				$lname = $values[1];
				$sname = $values[2];
				$phone = $values[3];

				
				$query = "INSERT INTO $table  ( `phone`, `Fname`, `Lname`, `Sname`) VALUES ( '$phone', '$fname', '$lname', '$sname');"; 
				
				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется  
			}  
			//data_person

			//date_visit
			if ($table == 'date_visit' && $operationType == 'insert')
			{ 
				$visitors_id = $values[0];
				$date = $values[1];  
				$query = "INSERT INTO $table  ( `visitors_id`, `date`) VALUES ( '$visitors_id', '$date');"; 

				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется  
			} 
			//date_visit

			//services
			if ($table == 'services' && $operationType == 'insert')
			{ 
				$services_date_visit_id = $values[0];
				$services = $values[1]; 

				$query = "INSERT INTO $table  ( `services_date_visit_id`, `services`) VALUES ( '$services_date_visit_id', '$services');";  

				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется  
			} 
			//services

			//staff
			if ($table == 'staff' && $operationType == 'insert')
			{ 
				$position = $values[0];
				$salary = $values[1]; 
				$data_person_id = $values[2]; 

				$query = "INSERT INTO $table  (`position`, `salary`, `data_person_id` ) VALUES ( '$position', '$salary','$data_person_id');"; 

				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется  
			} 
			//staff

			//visitors
			if ($table == 'visitors' && $operationType == 'insert')
			{ 
				$date_visit_id = $values[0];
				$data_person_id = $values[1]; 
				$services_id = $values[2]; 

				$query = "INSERT INTO $table  ( `date_visit_id`, `data_person_id`, `services_id` ) VALUES ( '$date_visit_id', '$data_person_id','$services_id');";  

				$stmt = $this->conn->prepare($query);  //подготавливается запроc
				$stmt->execute(); //запрос выполняется  
			} 
			//visitors
	}
	public function fetch($result) //данная функция позволяет преобразовать результат полученный из MySQL в ассоциативный массив, принимает на вход результат запроса к MySQL
	{ 
 		return  $result->fetch_all($mode  = self::FETCH_MODE);
	} 
}
