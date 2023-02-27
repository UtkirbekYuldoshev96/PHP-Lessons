<?php
//    echo $_FILES['f']['name'] . "<br>";
//    echo $_FILES['f']['type'] . "<br>";
//    echo $_FILES['f']['tmp_name'] . "<br>";
//    echo $_FILES['f']['size'] . "<br>";

    $img = $_FILES['f']['size'] / 1024;
    if ($img >= 2000){
        echo "<h1>Fayl katta boshqatdan urunib kuring!</h1>";
    }elseif($_FILES['f']['type'] != "img/jpeg"){
        echo "<h1>Rasm yuklang</h1>";
    }else{
        move_uploaded_file($_FILES['f']['tmp_name'],"img/" .$_FILES['f']['name'] .$img);
        ?>
            <img src="img/<?=$_FILES['f']['name'];?>">
        <?
    }
?>