<?php
require_once "Pessoa.php";

class Aluno extends Pessoa {
	private $matricula;

	public function __construct($nome, $cpf, $matricula) {
		parent::__construct($nome, $cpf);
		$this->matricula = $matricula;
	}

	public function getMatricula(): string {
		return $this->matricula;
	}

	public function setMatricula( $matricula ) {
		$this->matricula = $matricula;
	}

	public function toString(): string {
		return parent::toString() . " | Matricula: {$this->matricula}";
	}
}