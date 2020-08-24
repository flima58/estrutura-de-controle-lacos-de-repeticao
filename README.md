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


___________________________________________________________________________________________________________

<h4>Laço de repetição FOR</h4>

<p>Você deve usar O FOR quando você souber quando o FOR deve parar.</p>

```html 

for($i = 0( Variavel de contador ); $i < 10 (Condição de parada do FOR); $i++ (O alto incremente, mas também posso decrementar)){

     echo "<h1>".$i."</h1>";

}

```

```html 


for ($i = 0; $i < 100; $i+=5){
    echo $j."<br>";
}


```
<h4>Laço de repetição FOREACH</h4>

<p>O foreach é usado para percorrer arrays e imprimir os seus dados.</p>

```html

foreach($meses (Variavel do nosso array) as $key (o indice do Array ) => $value (O valor do array) ){

        echo $value[$key];
    }

```


<h4>While</h4>

<p> Faça enquanto for verdadeira a condição</p>

<p>Exemplos abaixo da sintaxe</p>


```html
<?php

$condicao = true;

while($condicao){

    $numero = rand(1,10);

    if($numero === 3){
        echo "TRÊS !!!!";
        $condicao = false;

    }
        echo "<span>$numero</span> ";


}

?>


```

<h4>DO WHILE</h4>

<p>Ele e parecido com  While, só que ele executa e depois faz toda a verificaçã e pede parada, executa pelomenos uma vez, mesmo sendo falsa</p>

<p>exemplo de sitanxe:</p>

```html

<?php


$total = 150;
$desconto = 0.9;

do{

    $total *= $desconto;

}while($total > 100);   

echo $total;

?>



```

