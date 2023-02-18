<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For 5</title>
</head>
<body>
<form action="for5.php" method="get">
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
        for ($i = 0; $i<=$n; $i++){
            if ($i%3 == 0){
                $summa = $i . "<br>";
                echo  "Natija " . $summa;
            }elseif(!$i%5==0){
                $summa = $i . "<br>";
            }
        }
    }
}
?>
</body>
</html>