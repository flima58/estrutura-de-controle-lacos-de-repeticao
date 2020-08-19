<h1>Estrutura de controle e laços de repetição </h1>

<p>Vamos começar falando do comando de decisão IF</p>

<p>O If Serve para você condicionar sua regra de négocio, o IF funciona como o SE </p>

<p>IF = SE </p>
<p>ELSEIF = SE NÃO </p>
<p>ELSE = NÃO </p>

<?php

$idadeAtual = $_GET['idade']; /*Pega os valores colocado na URL, depois do ? 
                        EX: http://localhost/estrutura-de-controle-lacos-de-repeticao/if/exemplo01.php?idade=17*/

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if /*SE, Codição para rodar o código que esta dentro do escopo*/($idadeCrianca > $idadeAtual){

    echo "Criança";

}elseif /*SE NÃO, coloco qunado quero pegar mais de uma condição */ ($idadeMaior > $idadeAtual){

    echo "Adolecente";

}else /*Não, caso não seja nenhum dos else if*/{

    echo "Adulto";

}


?>

<p>Também vamos ver o operador ternario, o IF de uma linha só<p>

<p>A sintaxe é:</p>
<p>ECHO (Condição) ?*ENTÃO* caso a condição seja verdadeira : caso a condição seja falsa </p>

<p>echo ($idadeAtual > 18) ? "Maior de idade" : "Menor de idade";