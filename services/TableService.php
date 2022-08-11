<?php
require_once '../models/Table.php';

class TableService {
	private $__table_model;

	public function __construct()
	{
		$this->__table_model = new Table();
	}

	public function getAllTableList()
	{
		$table_list = $this->__table_model->getAllTableList();

		if(false === $table_list) {
			return [];
		}

		return $table_list;
	}
}