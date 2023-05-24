<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tub sonni aniqlovchi dastur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form action="Tub.php" method="post" enctype="multipart/form-data">
    <label for=""><input type="text" name="n" class="form-control p-2 m-2" placeholder="n son kiriting"></label>
    <input type="submit" value="Jo'natish" class="form-control p-2 m-2">
</form>

<?php
    if (isset($_POST['n'])){
        $n = $_POST['n'];
        $tub = true;
        for ($i=2; $i<$n; $i++){
            if ($n % $i == 0){
                $tub = false;
            }
        }

        if ($tub == true){
            echo $n . " bu son tub son!";
        }else{
            echo $n . " bu son tub son emas!";
        }

    }
?>
</body>
</html>