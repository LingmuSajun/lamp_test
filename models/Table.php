<?php
require_once 'DBAccessor.php';

class Table extends DBAccessor
{
	public function getAllTableList()
	{
		$query = $this->__getAllTableListQuery();
		$all_tables = $this->dbAccess($query);
		return $all_tables;
	}

	private function __getAllTableListQuery()
	{
		$query = 'SHOW TABLES';
		return $query;
	}
}