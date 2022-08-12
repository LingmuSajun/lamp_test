<?php
require_once 'services/CountryService.php';
require_once 'AppController.php';

class Countries extends AppController
{
	protected function getResponse()
	{
		$country_service = new CountryService;
		$countries = $country_service->getAllCountries();
		$response = $this->getSuccessResponse($countries);
		return $response;
	}
} new Countries;