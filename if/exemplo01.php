<?php

$idadeAtual = $_GET['idade']; /*Pega os valores colocado na URL, depois do ? 
                        EX: http://localhost/estrutura-de-controle-lacos-de-repeticao/if/exemplo01.php?idade=17*/

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if /*SE, Codição para rodar o código que esta dentro do escopo*/($idadeCrianca > $idadeAtual){

    echo "<h1 style='color:red;'>Criança</h1>";

}else if /*SE NÃO, coloco qunado quero pegar mais de uma condição */ ($idadeMaior > $idadeAtual){

    echo "<h1 style='color: yellow;'>Adolecente</h1>";

}else if /*SE NÃO, coloco qunado quero pegar mais de uma condição */ ($idadeMelhor> $idadeAtual){

    echo "<h1 style='color: blue;'>Adulto</h1>";

}else /*Não, caso não seja nenhum dos else if*/{

    echo "<h1 style='color: green;'>Idoso</h1>";

}

echo "<br>";

echo ($idadeAtual > 18)?"<h1 style='color: blue;'>Maior de idade</h1>"/*Caso a condição seja verdadeira*/:"<h1 style='color: red;'>Menor de idade</h1>"/*Caso a condição seja falsa*/;

?>