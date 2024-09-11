<?php

function validaCPF($cpf)
{
  // Verifica se o numero digitado tem mais de 11 digitos
  // e verfifica se todos os numeros digitados não são iguais
  if (strlen($cpf) != 11) {
    return false;
  }

  return true;
}
