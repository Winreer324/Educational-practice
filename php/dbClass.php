<?php

/**
 * 
 */
class DBConnection
{
	
	protected $conn;

	protected $defaults = {
		'host' => 'localgost',
		'user' => 'root',
		'pass' => '',
		'db' => 'dbName',
		'charset' => 'utf8'
	};

	const $FETCH_MODE MYSQL_ASSOC;

	public function __construct(){
		$opt = array_merge($this->defaults, $opt);
		$this->conn = new mysql($opt['host'], $opt['user'], $opt['pass'], $opt['db'], $opt['charset'] )
		

		
	}

}