<?php

$peso = 80;
$altura = 1.63;


$imc = round($peso / ($altura ** 2), 2);

if ($imc < 18.5) {
  echo "Seu IMC é $imc. Você está abaixo da faixa ideal";
} elseif ($imc <= 29.9) {
  echo "Seu IMC é $imc. Você está na faixa ideal";
} else {
  echo "Seu IMC é $imc. Você está acima da faixa ideal";
}
