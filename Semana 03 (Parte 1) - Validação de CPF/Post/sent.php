<?php

include_once "../DB/connection.php";
include_once "../Utils/validation.php";

if (isset($_POST["cpf"])) {
  $cpf = $_POST["cpf"];
  
  if (validaCPF($cpf)) {
    insert($cpf);
    echo "CPF Valido";
  } else {
    echo "CPF Invalido";
  }
}
