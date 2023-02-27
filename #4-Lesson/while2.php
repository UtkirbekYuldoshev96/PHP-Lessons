<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php while 2 masala</title>
</head>
<body>
<form action="while2.php" method="get">
    <label>
        N son kiriting:
        <input type="text" name="n">
    </label><br>
    <label>
        M son kiriting:
        <input type="text" name="m">
    </label>
    <input type="submit" value="Jo'natish">
</form>

<?php
if (isset($_GET['n'],$_GET['m'])){
    $n = $_GET['n'];
    $m = $_GET['m'];
    $summa = null;
    $i= 1;
    if (is_numeric($n)){
        while ($n>$i){
            $summa = $n-$m;
            $i++;
        }
        echo $summa . "<br>";
    }
}else{
    echo "input malumot yuq kelmadi!";
}
?>
</body>
</html>