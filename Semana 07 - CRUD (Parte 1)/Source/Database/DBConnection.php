<?php
class DBConnection {
	private static ?DBConnection $instance = null;
	private PDO $pdo;

	private string $host = "localhost";
	private string $port = "3306";
	private string $user = "root";
	private string $password = "";
	private string $database = "CRUD_WEB2";

	private function __construct() {
		try {
			$dsn = "mysql:host={$this->host}:{$this->port};dbname={$this->database}";
			$this->pdo = new PDO($dsn, $this->user, $this->password);
		} catch (PDOException $exception) {
			error_log("A conexão falhou: {$exception->getMessage()}");
		}
	}

	public static function getInstance(): ?DBConnection {
		if (!isset(self::$instance)) {
			self::$instance = new DBConnection();
		}

		return self::$instance;
	}

	public function getConnection(): PDO {
		return $this->pdo;
	}
}
