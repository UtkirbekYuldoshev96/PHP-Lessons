<?php
    if( isset($_GET['x'], $_GET['y']) ){
        $x = $_GET['x'];
        $y = $_GET['y'];

        if ($x > $y){
            echo $x;
        }else{
            echo $y;
        }
    }else{
        echo "x and y ga qiymat kiritilmadi <br>
               <a href='?x=5&y=6'>Namuna sifatida havolani bosing</a> ";
    }
?>