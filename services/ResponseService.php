<?php
class ResponseService
{
	public function convertArrayToJsonString($array) {
		header("Access-Control-Allow-Origin: *");
		$json_string = json_encode($array);
		return $json_string;
	}
}