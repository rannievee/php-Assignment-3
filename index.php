<?php

$y=255;
 
for ($y; $y>=155; $y--){


    if($y%7==0){
        echo "baba" . "<br>";
    }
    elseif($y%9==0){
        echo "lao". "<br>";
    }
    else{
        echo $y ."<br>";
    }
}



?>