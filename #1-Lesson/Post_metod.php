<?php
    $son = $_POST['dollor'];
    $button = $_POST['r'];
    if ($button == 'd'){
        echo "Natija: " .  $son*11349.42;
    }else{
        echo "Natija: " . $button/11349.42;
    }
?>
