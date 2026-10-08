<?php
$moyeen = 21;
if($moyeen <0 || $moyeen>20){
    echo"Note non valide";
}else{
    if($moyeen < 10){
        echo "Non valide";
    }elseif($moyeen >= 10 && $moyeen < 12){
        echo "passable";
    }elseif($moyeen >= 12 && $moyeen < 14){
        echo "assez bien";
    }elseif($moyeen >= 14 && $moyeen < 16){
        echo "bien";
    }elseif($moyeen >= 16 && $moyeen <=20){
        echo "très bien";
    }
}
?>
