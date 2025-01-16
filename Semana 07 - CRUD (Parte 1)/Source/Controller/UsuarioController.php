<?php

use Utils\UsuarioValidator;

require_once "Utils/UsuarioValidator.php";

require_once "Model/UsuarioModel.php";

class UsuarioController {
	public static function index() {
		$users = UsuarioModel::getAll();
		require_once "View/Usuario/index.php";
	}

	public static function update() {
		$id = $_GET["id"];
		$user = UsuarioModel::getUserByID($id);
		require_once "View/Usuario/Forms/UpdateForm.php";
	}

	public static function save() {
		$id = $_POST["id"];
		$nome = $_POST["nome"];
		$email = $_POST["email"];

		UsuarioModel::updateUser($id, $nome, $email);
	}

	public static function delete() {
		$id = $_GET["id"];
		UsuarioModel::deleteUser($id);
	}

	public static function create() {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		if (!UsuarioValidator::validateSenha($senha)) {
			$error = "Senha deve ter mais de 8 caracteres";
			require_once "View/Usuario/Forms/CreateForm.php";
			return;
		}

		UsuarioModel::createUser($nome, $email, $senha);
		header("Location: /CRUD/Source/");
	}
}
