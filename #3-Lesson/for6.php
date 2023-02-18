<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For 6</title>
</head>
<body>
    <form action="for6.php" method="get">
        <label>
            Son kiriting: <input type="text" name="n">
        </label>
        <input type="submit" value="Jo'natish">
    </form>
<?php
    if (isset($_GET['a'])){
        $n = $_GET['n'];
        $tub = null;
        if (is_numeric($n)){
            for ($i = 2; $i<=$n; $i++){
                $tub = true;

                for ($j = 2; $j<= sqrt($i); $j++){
                    if ($i%$j == 0){
                        $tub = false;
                        break;
                    }
                }
                if ($tub == true){
                    echo "natija tub son " . $i . "<br>";
                }
            }
        }
    }
?>
</body>
</html>