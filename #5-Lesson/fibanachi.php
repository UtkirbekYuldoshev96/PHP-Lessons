<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fibanachi sonlarni aniqlash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form action="fibanachi.php" method="post" enctype="multipart/form-data">
    <label for=""><input type="text" name="a" class="form-control" placeholder="A = Son kiriting"></label>
    <label for=""><input type="text" name="b" class="form-control" placeholder="B = Son kiriting"></label>
    <input type="submit" value="Jo'natish" name="submit" class="form-control">
</form>

<?php
    if (isset($_POST['submit'])){
        function fibanachi($a, $b){
            echo $a . "<br>";
            echo $b . "<br>";

            for ($i = 0; $i<=10; $i++){
                $z = $a + $b;
                $a = $b;
                $b = $z;
                echo  $z . "<br>";
            }
        }

        fibanachi($_POST['a'], $_POST['b']);
    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>