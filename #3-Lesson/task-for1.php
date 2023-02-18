<?php
    $n = 100;
    for ($i=1; $i<=$n; $i++){
        if ($n%$i ==0){
//            echo "Qoldiqli bo'linadigan sonlar " . $i . "<br>";
            if ($i%5 ==0){
                echo "5 qoldiqsiz bulinadi " . $i . "<br>";
            }
        }
    }
?>