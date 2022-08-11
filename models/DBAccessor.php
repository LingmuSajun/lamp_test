<?php
class DBAccessor
{
	private $__pdo;

	public function __construct()
	{
		$this->__pdo = new PDO($_ENV['DB_HOST'], $_ENV['DB_USER_NAME'], $_ENV['DB_PASSWORD']);
	}

	protected function dbAccess(string $query, array $bind_value_list = [])
	{
		try {
			$stmt = $this->__pdo->prepare($query);
			$stmt->execute($bind_value_list);
			$result = $stmt->fetchAll();
			return $result;
		} catch (PDOException $e) {
			return false;
		}
	}
}