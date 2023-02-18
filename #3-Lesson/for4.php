<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For 4</title>
</head>
<body>
<form action="for4.php" method="get">
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
        for ($i =1; $i<=$n; $i++){
            if ($n%$i ==0){
                echo $i . "<br>";
            }
        }
    }
}
?>
</body>
</html>