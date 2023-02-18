<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For 3</title>
</head>
<body>
<form action="for3.php" method="get">
    <label>
        Son kiriting: <input type="text" name="n">
    </label>
    <input type="submit" value="Jo'natish">
</form>

<?php
    if (isset($_GET['n'])){
        $n = $_GET['n'];
        $summa = null;
        if (is_numeric($n)){
            for ($i = 1; $i<=$n; $i++){
                if ($n%$i==0){
                    $summa = $i + $n;
                    echo "mukkamal son  " . $i . "<br>";
                    echo "xa " . $summa . "<br>";
                }else{
                    echo "mukkammal son emas!" . $i . "<br>";
                    echo "yuq" . $summa . "<br>";
                }
            }
        }
    }
?>
</body>
</html>