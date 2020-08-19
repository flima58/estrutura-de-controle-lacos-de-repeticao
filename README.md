<h1>Estrutura de controle e laços de repetição </h1>

<h4>Vamos começar falando do comando de decisão IF</h4>

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

_______________________________________________________________________________________________________________

<h4>Vamos falar agora sobre o Switch Case, uma estrutura de decisão muito legal, ela deve ser usada, qunado você já sabe quais os valores que vão ser coletados.</h4>

<p>Abaixo você verá a sintaxe</p>

<h5>ALERTA</h5>
<p>logo abaixo da condição do case, deverá colocar um <strong>BREAK</strong>, caso você esqueça, ele vai executar a estrução de baixo, aconselho você que testar sem o BREAK para ver a reação.</p>

```html
$diaDaSemana = 5;//date("w");<br><br>


switch($diaDaSemana){<br>
    case 0 :<br>
        echo "Domingo";<br>
        break;<br>
    case 1 : <br>
        echo "Segunda-feira";<br>
        break;<br>
    case 2:<br>
        echo "Terça-feira";<br>
        break;<br>
    case 3:<br>
        echo "Quarta-feira";<br>
        break; <br>
    case 4:<br>
        echo "Quita-feira";<br>
        break;<br>
    case 5:<br>
        echo "Sexta-feira";<br>
        break;<br>
    case 6:
        echo "Sábado";<br>
        break; <br>
    default:<br>
        echo "Não é um dia da semana";<br>
                   
}<br>
```





<p>O <strong>default</strong> e usado quando a variavel que foi coletada, não se encaixa em nenhum dos outros casos.</p>


