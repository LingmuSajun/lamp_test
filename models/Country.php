<?php
require_once 'DBAccessor.php';

class Country extends DBAccessor
{
	public function getAllCountries()
	{
		$query = 'SELECT * FROM countries';
		$countries = $this->dbAccess($query);
		return $countries;
	}
}