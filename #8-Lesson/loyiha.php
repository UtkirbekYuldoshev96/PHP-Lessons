<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loyiha</title>
</head>
<body>
<form action="#" method="post">
    <input type="text" name="name" placeholder="Maxsulot soni kiriting">
    <input type="submit" name="add_plus" value="Jo'natish">
</form>
<?php
    if (isset($_POST['add_plus'])){
        $Mahsulot = $_POST['name'];
        ?>
<form>
    <? for ($i=0; $i<$Mahsulot; $i++){
        echo "<input type='text' name='nomi{$i}'>";
        echo "<input type='text' name='soni{$i}'>";
        echo "<input type='text' name='narxi{$i}'>";
    }
    ?>
    <input type="text" name="name2" value="<?=$Mahsulot;?>">
    <input type="submit" name="add_plus2" value="Jo'natish">
</form>
    <?
}
    if (isset($_POST['add_plus2'])){
        $Mahsulot = $_POST['name2'];
        $summa = 0;
        for ($j=0; $j<$Mahsulot; $j++){
            $summa += $_POST["son". $i]*$_POST["narxi". $i];
        }
        echo "Jami summa: " .  $summa;
    }
?>
</body>
</html>