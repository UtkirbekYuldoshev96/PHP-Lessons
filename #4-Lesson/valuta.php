<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-da Valyuta kursi</title>
</head>
<body>
    <form action="valuta.php" method="post">
        <label>
            <input type="text" name="sum">
        </label> <br>
        <label>Usa <input type="radio" name="k" value="usa"></label>
        <label>Uz<input type="radio" name="k" value="uz"></label><br>
        <input type="submit" value="Jo'natish">
    </form>

    <?php
        if (isset($_POST['sum'])){
            $summa = $_POST['sum'];
            $k = $_POST['k'];


            if (is_numeric($summa) and is_numeric($k)){
                if ($k == "usa"){
                    $k = 11353.8;
                    $resalt = $summa * $k;
                }
                else{
                    $k = 11353.8;
                    $resalt = $summa / $k;
                }
                echo "Sum buladi " . $resalt;
            }

        }
    ?>
</body>
</html>