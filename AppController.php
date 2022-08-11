<?php
require_once 'vendor/autoload.php';
require_once 'services/ResponseService.php';

abstract class AppController {
	protected $response_service;

	public function __construct() {
		// .env読み込み
		$dot_env = Dotenv\Dotenv::createImmutable(__DIR__);
		$dot_env->load();
		// レスポンスサービスのインスタンス化
		$this->response_service = new ResponseService;
		// レスポンス取得
		$response = $this->getResponse();
		echo $response;
	}

	abstract protected function getResponse();
}