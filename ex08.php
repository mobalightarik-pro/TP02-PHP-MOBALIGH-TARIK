<?php
echo "<h2> Nombres pairs de 0 a 20</h2>";
$i=0;
while($i<=20){
    if($i%2==0){
        if($i==10){
            echo"<b>C'est le chiffre 10</b><br>";
        }
    else{
        echo $i . "<br>";
    }
    }
    $i++;
}
echo "<h2> comparer une boucle `while` et une boucle `do-while</h2>";

$j=5;
while($j<5){
    echo "la valeur de j est $j pour le while <br>";
    $j++;
}
echo"$j from while <br>";

do{
    echo "la valeur de j est $j pour le do-while <br>";
    $j++;
}while($j<5);
echo"$j from do while <br>";



echo "<h2> parcourir les entiers de 1 a 20</h2>";

$k=1;
while($k<=20){
    if($k==16){
        break;
    }
    if($k %3 ==0){
        $k++;
        continue;
    }else{
        echo $k . "<br>";
    }
    $k++;
}



?>