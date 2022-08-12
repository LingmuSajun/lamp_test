<?php
require_once 'services/CountryService.php';
require_once 'AppController.php';

class CountryList extends AppController
{
	protected function getResponse()
	{
		$country_service = new CountryService;
		$countries = $country_service->getAllCountries();
		$response = $this->response_service->getSuccessResponse($countries);
		return $response;
	}
} new CountryList;