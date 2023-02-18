<?php
    $n = 50;
    $summa = null;
    for ($i = 20; $i<$n; $i++){
        if ($i%2 == 1){
            $summa = $n + $i;
            echo "natija = " . $summa . "<br>";
        }
    }
    echo "<h2>natija = " . $summa . "</h2>";

?>