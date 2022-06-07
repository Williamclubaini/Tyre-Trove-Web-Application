<?php 
declare(strict_types = 1);

namespace libraries;

use PDO;

class Connection {

    private $dsn;
    private $username;
    private $password;

	public function Con()
	{
		$this->dsn      =  CONFIG['database_type'].
		                   ':host='.CONFIG['host'].
		                   ';dbname='.CONFIG['database'].
		                   ';charset='.CONFIG['charset'];
		$this->username = CONFIG['username'];
		$this->password = CONFIG['password'];

		return $this->connection($this->dsn, $this->username, $this->password);
	}

	public function connection(string $dsn, string $username, string $password)
	{
		try {

		 $OBJ = new PDO($dsn, $username, $password);
		 $OBJ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 return  $OBJ;

		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

}

