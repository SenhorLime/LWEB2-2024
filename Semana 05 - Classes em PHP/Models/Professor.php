<?php
require_once "Pessoa.php";

class Professor extends Pessoa {
	private $siape;

	public function __construct( $nome, $cpf, $siape ) {
		parent::__construct( $nome, $cpf );
		$this->siape = $siape;
	}

	public function getSiape(): string {
		return $this->siape;
	}

	public function setSiape( $siape ) {
		$this->siape = $siape;
	}

	public function toString(): string {
		return parent::toString() . " | SIAPE: {$this->siape}";
	}
}