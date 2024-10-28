<?php
include "Models/Aluno.php";
include "Models/Professor.php";

if ( isset( $_POST["nome"], $_POST["cpf"] ) ) {
	if ( isset( $_POST["matricula"] ) ) {
		$newAluno = new Aluno( $_POST["nome"], $_POST["cpf"], $_POST["matricula"] );

		echo $newAluno->toString();
	}

	if ( isset( $_POST["siape"] ) ) {
		$newProfessor = new Professor( $_POST["nome"], $_POST["cpf"], $_POST["siape"] );

		echo $newProfessor->toString();
	}
}
