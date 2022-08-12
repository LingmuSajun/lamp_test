<?php
require_once 'vendor/autoload.php';
require_once 'services/ResponseService.php';

abstract class AppController {
	private $__response_service;

	public function __construct() {
		$dot_env = Dotenv\Dotenv::createImmutable(__DIR__);
		$dot_env->load();

		$this->__response_service = new ResponseService;

		$response = $this->getResponse();
		echo $response;
	}

	abstract protected function getResponse();

	protected function getErrorResponse($response) {
		$error_response = $this->__response_service->getErrorResponse($response);
		return $error_response;
	}

	protected function getSuccessResponse($response) {
		$success_response = $this->__response_service->getSuccessResponse($response);
		return $success_response;
	}
}