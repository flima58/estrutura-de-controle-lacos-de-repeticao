<h1>Estrutura de controle e laços de repetição </h1>

<p>Vamos começar falando do comando de decisão IF</p>

<p>O If Serve para você condicionar sua regra de négocio, o IF funciona como o SE </p>

<p>IF = SE </p>
<p>ELSEIF = SE NÃO </p>
<p>ELSE = NÃO </p>

<p><?php</p>

<p>$idadeAtual = $_GET['idade']; /*Pega os valores colocado na URL, depois do ? 
                        EX: http://localhost/estrutura-de-controle-lacos-de-repeticao/if/exemplo01.php?idade=17*/</p>

<p>$idadeCrianca = 12;</p>
<p>$idadeMaior = 18;</p>
<p>$idadeMelhor = 65;</p>


<p>if /*SE, Codição para rodar o código que esta dentro do escopo*/($idadeCrianca > $idadeAtual){</p>

    echo "Criança";

<p>}elseif /*SE NÃO, coloco qunado quero pegar mais de uma condição */ ($idadeMaior > $idadeAtual){</p>

    echo "Adolecente";

<p>}else /*Não, caso não seja nenhum dos else if*/{</p>

   echo "Adulto";

<p> }</p>


<p>?></p>

<p>Também vamos ver o operador ternario, o IF de uma linha só<p>

<p>A sintaxe é:</p>
<p>ECHO (Condição) ?*ENTÃO* caso a condição seja verdadeira : caso a condição seja falsa </p>

<p>echo ($idadeAtual > 18) ? "Maior de idade" : "Menor de idade";