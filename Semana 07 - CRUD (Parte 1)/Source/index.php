<?php

include "Controller/UsuarioController.php";

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$url = str_replace("/CRUD/Source", "", $url);

switch ($url) {
	case "/":
		UsuarioController::index();
		break;

	case "/users/form/update":
		UsuarioController::update();
		break;

	case "/users/form/create":
		require_once "View/Usuario/Forms/CreateForm.php";
		break;

	case "/users/create":
		UsuarioController::create();
		break;

	case "/users/delete":
		UsuarioController::delete();
		break;

	case "/users/update":
		UsuarioController::save();
		break;

	default:
		echo "Erro 404 - Rota não encontrada";
		break;
}
