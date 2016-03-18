<?php

/**
 * Created by PhpStorm.
 * User: tsmith
 * Date: 3/2/2016
 * Time: 5:07 PM
 */
class DB
{
	var $servername = 'mariadb-047.wc2.dfw3.stabletransit.com';
	var $username = '502097_tsmith';
	var $password = 'D4vT35tG4xh@';
	var $database = '502097_tsmith';
	var $conn;

	public function __construct()
	{
		$this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
	}

	/**
	 * @param $sql
	 * @param bool $values
	 * @return array
	 *
	 * just setting up the db calls
	 */
	public function query($sql, $values = false){
		$statement = $this->conn->prepare($sql);
		if (!$values) {
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_ASSOC);
		}
		$statement->execute($values);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
		}
}