<?php 
declare(strict_types = 1);

namespace Models;

use libraries\Connection;
use PDO;

class Model extends Connection {

	use Queries; 

	/**
	 * 
	 * @return data Array
	 * 
	 */
	public function runQuery(string $query, $mixed = NULL, $fetchMode = PDO::FETCH_OBJ)
	{
		if($mixed == NULL) {

			return $this->executeQuery($query, NULL, $fetchMode);

		} elseif (gettype($mixed) == 'array') {

			return $this->executeQuery($query, $mixed, $fetchMode);

		} elseif (gettype($mixed) == 'integer') {

			return $this->executeQuery($query, NULL, $mixed);
		}
	} 

	/**
	 * 
	 * @return data Array
	 * 
	 */
	public function executeQuery(string $query, array $data = NULL, int $fetchMode)
	{
		$sql = $this->Con()->prepare($query);

		if (!empty($data)) {

			$sql->execute($data);
			$data = $sql->fetchAll($fetchMode);
			return $data;
		
		} else {

		    $sql->execute();
		    $databaseData  = $sql->fetchAll($fetchMode);
		    return $databaseData;
		}
	}

	public function execute(string $query, array $data = NULL)
	{
		$sql = $this->Con()->prepare($query);

		if (!empty($data)) {

			$sql->execute($data);
		
		} else {

		    $sql->execute();
		}
	}

	public function bookingsNum()
    {
        $query = $this->countAllWhere('appointments_tbl', 'status');
        return $this->runQuery($query, ['Pending']);
    }

	public function Redirect(string $page, string $email)
	{
		session_start();
		unset($_SESSION['admin']);
		$_SESSION['user'] = $email;
		header("location:index.php?page=$page");
	}

	protected function adminRedirect(string $page, string $email)
	{
		session_start();
		unset($_SESSION['user']);
		$_SESSION['admin'] = $email;
		header("location:index.php?page=$page");
	}
}