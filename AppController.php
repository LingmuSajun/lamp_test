<?php
require_once 'vendor/autoload.php';
require_once 'services/ResponseService.php';

abstract class AppController {
	public function __construct() {
		$dot_env = Dotenv\Dotenv::createImmutable(__DIR__);
		$dot_env->load();

		$response_data = $this->getResponseData();

		$response_service = new ResponseService;
		$json_response = $response_service->convertArrayToJsonString($response_data);
		echo $json_response;
	}

	abstract protected function getResponseData();
}