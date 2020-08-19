<h1>Estrutura de controle e laços de repetição </h1>

<h4>Vamos começar falando do comando de decisão IF</h4>

<p>O If Serve para você condicionar sua regra de négocio, o IF funciona como o SE </p>

<p>IF = SE </p>
<p>ELSEIF = SE NÃO </p>
<p>ELSE = NÃO </p>


```html 

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







```




<p>Também vamos ver o operador ternario, o IF de uma linha só<p>

<p>A sintaxe é:</p>
<p>ECHO (Condição) ?*ENTÃO* caso a condição seja verdadeira : caso a condição seja falsa </p>

<p>echo ($idadeAtual > 18) ? "Maior de idade" : "Menor de idade";

_______________________________________________________________________________________________________________

<h4>Vamos falar agora sobre o Switch Case, uma estrutura de decisão muito legal, ela deve ser usada, qunado você já sabe quais os valores que vão ser coletados.</h4>

<p>Abaixo você verá a sintaxe</p>

<h5>ALERTA</h5>
<p>logo abaixo da condição do case, deverá colocar um <strong>BREAK</strong>, caso você esqueça, ele vai executar a estrução de baixo, aconselho você que testar sem o BREAK para ver a reação.</p>

```html
$diaDaSemana = 5;//date("w");  


switch($diaDaSemana){ 
    case 0 : 
        echo "Domingo"; 
        break; 
    case 1 :  
        echo "Segunda-feira"; 
        break; 
    case 2: 
        echo "Terça-feira"; 
        break; 
    case 3: 
        echo "Quarta-feira"; 
        break;  
    case 4: 
        echo "Quita-feira"; 
        break; 
    case 5: 
        echo "Sexta-feira"; 
        break; 
    case 6:
        echo "Sábado"; 
        break;  
    default: 
        echo "Não é um dia da semana"; 
                   
} 
```





<p>O <strong>default</strong> e usado quando a variavel que foi coletada, não se encaixa em nenhum dos outros casos.</p>


