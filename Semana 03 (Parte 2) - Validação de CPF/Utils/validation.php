<?php

function validaCPF($cpf)
{
  // Verifica se o numero digitado tem mais de 11 digitos
  // e verfifica se todos os numeros digitados não são iguais
  if (strlen($cpf) != 11) {
    return false;
  }

  $cpf_split = str_split($cpf);
  
  if(primeiroDigitoVerificador($cpf_split) && segundoDigitoVerificador($cpf_split)) {
    return true;
  } 

  return false;
}

function primeiroDigitoVerificador($cpf_split) {
  $contador = 0;
  $somaDosNumeros = 0;

  for ($i = 10; $i >= 2; $i--) {
    $somaDosNumeros = $somaDosNumeros + ((int)$cpf_split[$contador] * $i);
    $contador++;
  }

  $digitoVerificador = $somaDosNumeros % 11;

  if (11 - $digitoVerificador == (int)$cpf_split[9]) {
    return true;
  } else {
    return false;
  }
}

function segundoDigitoVerificador($cpf_split) {
  $contador = 0;
  $somaDosNumeros = 0;

  for ($i = 11; $i >= 2; $i--) {
    $somaDosNumeros = $somaDosNumeros + ((int)$cpf_split[$contador] * $i);
    $contador++;
  }

  $digitoVerificador = $somaDosNumeros % 11;

  if (11 - $digitoVerificador == (int)$cpf_split[10]) {
    return true;
  } else {
    return false;
  }
}
