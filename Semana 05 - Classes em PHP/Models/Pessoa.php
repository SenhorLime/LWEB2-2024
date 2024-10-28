<?php

abstract class Pessoa {
	protected $nome;
	protected $cpf;

	public function __construct( $nome, $cpf ) {
		$this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function getNome(): string {
		return $this->nome;
	}

	public function setNome( $nome ) {
		$this->nome = $nome;
	}

	public function getCpf(): string {
		return $this->cpf;
	}

	public function setCpf( $cpf ) {
		$this->cpf = $cpf;
	}

	public function toString(): string {
		return "Nome: {$this->nome} | CPF: {$this->cpf}";
	}
}