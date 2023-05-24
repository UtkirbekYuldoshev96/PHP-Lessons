<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New site</title>
</head>
<body>
<main>
    <h2>Yangiliklar</h2>
    <div style="display: flex; padding: 10px;">
        <?php require_once "data.php";
        global $data;
        foreach($data as $items):
            if ($items['status'] == true):
        ?>
            <div style="margin:5px; background-color:#ff6528; width: 350px;">
                <img style="width:100%;" src="<?=$items['img'];?>" alt="tabiat">
                <h3><?=$items['title'];?></h3>
                <b><?=$items['data'];?></b>
                <p><?=$items['content'];?></p>
            </div>
        <?php
        endif;
        endforeach; ?>
    </div>
</main>
</body>
</html>