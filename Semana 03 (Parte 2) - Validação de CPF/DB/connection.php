<?php

function insert($cpf)
{
  $conexao = new PDO("mysql:host=localhost:3306;dbname=ValidaCPF", 'root', '');

  $sql = "INSERT INTO Registro_CPF (cpf) VALUES (?)";

  $stmt = $conexao->prepare($sql);

  $stmt->bindValue(1, $cpf);

  $stmt->execute();
}
