<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php while</title>
</head>
<body>
<form action="while-3.php" method="get">
    <label>
        N son kiriting:
        <input type="text" name="n">
    </label>
    <input type="submit" value="Jo'natish">
</form>

<?php
    if (isset($_GET['n'])){
        $n = $_GET['n'];
        $summa = null;
        $i= 1;
        if (is_numeric($n)){
            while ($n >= $i){
                $summa = $i+$n;
                $summa +=$n;
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