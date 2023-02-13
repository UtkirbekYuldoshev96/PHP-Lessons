<?php
    if ( isset($_GET['x'], $_GET['y']) ){
        $x = $_GET['x'];
        $y = $_GET['y'];

        if ($x > $y){
            echo $x;
        }else{
            echo $y;
        }
    }else{
        echo "x va y ga qiymat ";
    }
?>