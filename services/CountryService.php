<?php
require_once 'models/Country.php';

class CountryService {
	public function getAllCountries()
	{
		$country_model = new Country;
		$countries = $country_model->getAllCountries();

		if(false === $countries) {
			return [];
		}

		return $countries;
	}
}