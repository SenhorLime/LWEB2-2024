<?php

require_once "Database/DBConnection.php";

class UsuarioModel {
	public int $id;
	public string $nome, $email, $senha;

	public function __construct($id, $nome, $email, $senha) {
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
	}

	public function getID(): int {
		return $this->id;
	}

	public function getNome(): string {
		return $this->nome;
	}

	public function getEmail(): string {
		return $this->email;
	}

	public function getSenha(): string {
		return $this->senha;
	}

	public static function getAll(): array {
		$database = DBConnection::getInstance();
		$pdo = $database->getConnection();
		$userList = [];

		$stmt = $pdo->prepare("SELECT * FROM Usuarios");
		$stmt->execute();

		foreach ($stmt->fetchAll() as $user) {
			$userList[] = new UsuarioModel($user["id"], $user["nome"], $user["email"], $user["senha"]);
		}

		return $userList;
	}

	public static function getUserByID(int $id): UsuarioModel {
		$database = DBConnection::getInstance();
		$pdo = $database->getConnection();

		$stmt = $pdo->prepare("SELECT * FROM Usuarios WHERE id = ?");
		$stmt->execute([$id]);

		$user = $stmt->fetch();

		return new UsuarioModel($user["id"], $user["nome"], $user["email"], $user["senha"]);
	}

	public static function createUser(string $nome, string $email, string $senha): void {
		$database = DBConnection::getInstance();
		$pdo = $database->getConnection();

		$stmt = $pdo->prepare("INSERT INTO Usuarios (nome, email, senha) VALUES (?, ?, ?)");
		$stmt->execute([$nome, $email, $senha]);

		header("Location: /CRUD/Source/");
	}

	public static function updateUser(int $id, string $nome, string $email): void {
		$database = DBConnection::getInstance();
		$pdo = $database->getConnection();

		$stmt = $pdo->prepare("UPDATE Usuarios SET nome = ?, email = ? WHERE id = ?");
		$stmt->execute([$nome, $email, $id]);

		header("Location: /CRUD/Source/");
	}

	public static function deleteUser(int $id): void {
		$database = DBConnection::getInstance();
		$pdo = $database->getConnection();

		$stmt = $pdo->prepare("DELETE FROM Usuarios WHERE id = ?");
		$stmt->execute([$id]);

		header("Location: /CRUD/Source/");
	}
}
