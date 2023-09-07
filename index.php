<?php

for($i = 33; $i< 534; $i++){//make a loop to run through 33 to 534
    
    if ($i % 5 === 0 && $i % 9 === 0) {// if the number is /5 and 9 than you wil echo web
        echo "web <br>";
    } 
    elseif ($i % 5 === 0) {
     

        if ($i % 2 === 0){
            echo "<b> software <br> </b>";
        }else echo "software <br>";
       

    } elseif ($i % 9 === 0) {

        if ($i % 2 === 0){
            echo "<b> developer <br> </b>";
        }else echo "developer <br>";
       
    }
    elseif ($i % 2 == 0) {
    echo " <b> $i <br> </b>";
    }
    else{
        echo "$i <br>";
     }
}
