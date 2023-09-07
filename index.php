<?php

for($i = 33; $i< 534; $i++){
    
  

    if ($i % 5 === 0 && $i % 9 === 0) {
        echo "web <br>";
    } 
    elseif ($i % 2 == 0) {
    echo " <b> $i <br> </b>";
    }
    else{
        echo "$i <br>";
     }
}
