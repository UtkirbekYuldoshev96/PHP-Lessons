<?php
    $list = ["Home", "About", "Content", "email"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php da ul bilan yozish</title>
</head>
<body>
    <h3>Taomalr ro'yhati</h3>
    <ul style="display: flex; justify-content: space-between;">
        <?php foreach($list as $food):?>
        <li><a href="#" style="text-decoration: none; font-size: 24px; color: blue;"><?=$food?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>