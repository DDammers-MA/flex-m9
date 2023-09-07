<?php

for ($i = 33; $i < 534; $i++) { //make a loop to run through 33 to 534

    if ($i % 5 === 0 && $i % 9 === 0) { // if the number is /5 and 9 than you wil echo web

        if ($i % 2 === 0) { //by using this you wil see if the web is a even number and makes it bold
            echo "<b> web <br> </b>";
        } else echo "web <br>";
    } elseif ($i % 5 === 0) { //if nuber is able to devide by 5 you wil echo softere
        if ($i % 2 === 0) { //by using this you wil see if the software is a even number and makes it bold
            echo "<b> software <br> </b>";
        } else echo "software <br>";
    } elseif ($i % 9 === 0) { //same thing happens here but instead of devided by 5 is devides by 9
        if ($i % 2 === 0) {
            echo "<b> developer <br> </b>";
        } else echo "developer <br>";
    } elseif ($i % 2 == 0) { // here it loop if the normal nuber are even or odd and make the even one bold and the other normal
        echo " <b> $i <br> </b>";
    } else {
        echo "$i <br>";
    }
}
