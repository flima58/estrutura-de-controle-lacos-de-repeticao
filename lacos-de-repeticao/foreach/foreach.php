<?php

/* $meses = array(
     "Janeiro",
     "Fevereiro",
     "Março",
     "Abril",
     "Maio",
     "Junho",
     "Julho",
     "Agosto",
     "Setembro",
     "Outubro",
     "Novembro",
     "Dezembro"
    );

    foreach($meses as $index => $mes){

       echo "<p>Indice: ".$index."</p>"; 
       echo "<p>Qual é o mês: ".$mes."</p>";
    }*/


   


?>

<form>
        <input name="nome" type="name">
        <input name="nascimento" type="date">
        <input type="submit" value="Enviar">
</form>

<?php

if(isset($_GET)){
    foreach($_GET as $key => $value){
        echo "<p>nome do campo: " .$key."<br>";
        echo "Valor do campo: " .$value."</p>";
        echo "<hr>"; 
    } 
}


?>