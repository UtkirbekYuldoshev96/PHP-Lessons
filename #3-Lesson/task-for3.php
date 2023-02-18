<?php
    $n = 100;
    $summa = null;
    for ($i = 0; $i<=$n; $i++){
        if ($i%5 ==0){
            $summa = ($i + 2);
            echo $i + 2 . "<br>";
        }
}
    echo "<h2> Summa = " . $summa . "</h2>";
?>