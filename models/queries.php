<?php
declare(strict_types = 1);

namespace models;

trait Queries { 

	/**
	*
	*@Written By 
	*William C. Lubaini
	*Date::12/31/2021 
	* 
	**/ 
	private $columnValues = [];

	public function selectAllFrom(string $table)
	{
		$query = 'SELECT * FROM `'.$table.'`';
		return $query;
	}
	
	public function selectFromAndWhere(string $table, string $column)
	{
		$query = 'SELECT * FROM `'.$table.'` WHERE '.$column.' = ?';
		return $query;
	}

	public function selectFromWhereAnd(string $table, string $column1, string $column2)
	{
		$query = 'SELECT * FROM `'.$table.'` WHERE '.$column1.' = ? AND '.$column2.' = ?';
		return $query;
	}

	public function countAll(string $table)
	{
		$query = 'SELECT Count(*) AS numbersOfRecords FROM `'.$table.'`';
		return $query;
	}
	
	public function sumColumn(string $column, string $table)
	{
		$query = 'SELECT SUM('.$column.') AS sumOfRecords FROM `'.$table.'`';
		return $query;
	}

	public function countAllWhere(string $table, string $column)
	{
		$query = 'SELECT Count(*) AS numbersOfRecords FROM `'.$table.'` WHERE '.$column.' = ?';
		return $query;
	}

	public function countFromWhereAnd(string $table, string $column1, string $column2)
	{
		$query = 'SELECT Count(*) AS numberOfRecords FROM `'.$table.'` WHERE '.$column1.' = ? AND '.$column2.' = ?';
		return $query;
	}

	public function deleteFromWhere(string $table, string $column)
	{
		$query = 'DELETE FROM `'.$table.'` WHERE '.$column.' = ?';
		return $query;
	}

	public function selectFromAndLimit(string $table, int $int)
	{
		$query = 'SELECT * FROM `'.$table.'` LIMIT '.$int;
		return $query;
	}

	public function selectFromLimitOffset(string $table, int $limit, int $offset)
	{
		$query = 'SELECT * FROM `'.$table.'` LIMIT '.$limit.' OFFSET '.$offset;
		return $query;
	}

	public function deleteAllFrom(string $table)
	{
		$query = 'TRUNCATE '.CONFIG['database'].'.'.$table;
		return $query;
	}

	public function insertInto(string $table, array $columns)
	{
		$columNum = count($columns);
		$values = array_fill(intval(0), $columNum, "?");
		$query  = 'INSERT INTO `'.$table.'`('.implode(', ', $columns).') 
		           VALUES('.implode(', ', $values).')';
		return $query;
	}

	public function update(string $table, array $columns, string $column)
	{
		foreach ($columns as $cols) {
                    array_push($this->columnValues, $cols.' = ?');
                }        
        $query = 'UPDATE `'.$table.'` SET '.implode(', ', $this->columnValues).' 
                  WHERE '.$column.' = ?';
        return $query;
	}
}