<?php

namespace Utils;

class UsuarioValidator {
	public static function validateSenha(string $senha): bool {
		return strlen($senha) > 8;
	}
}
