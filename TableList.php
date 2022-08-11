<?php
// require_once 'services/TableService.php';
require_once 'AppController.php';

class TableList extends AppController
{
	protected function getResponse()
	{
		// $table_service = new TableService;
		// $table_list = $this->table_service->getAllTableList();
		$table_list = [
			[
				'aaa' => 'bbb',
			]
		];

		$response = $this->response_service->getSuccessResponse($table_list);
		return $response;
	}
} new TableList;