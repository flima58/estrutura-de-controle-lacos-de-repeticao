<?php


/*$fruta = array ('Uva','Banana','Cereja','Laranja','melancia');

for ($i = 0; $i < count($fruta); $i++){

    echo "<p>".$fruta[$i]."</p>";
}*/


/*for ($i = 0; $i < 100; $i++ ){
   /* para acrecentar mais de um 
    if($i >= 25 && $i <= 45)continue;
    

    if($i === 69)break;
    echo $i."<br>";
}*/

echo "<select>";
for($i = date("Y"); $i > date("Y")-100; $i--){
     echo "<option value='$i'>".$i."</option>";
}

echo "</select>";



?>