<?php
require_once 'services/CountryService.php';
require_once 'AppController.php';

class Countries extends AppController
{
	protected function getResponseData()
	{
		$country_service = new CountryService;
		$response_data = $country_service->getAllCountries();
		return $response_data;
	}
} new Countries;