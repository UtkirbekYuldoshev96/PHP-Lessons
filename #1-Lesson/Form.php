<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign app </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form action="" method="get">
            <div>
                <input type="text" name="login" placeholder="Login kiriting">
                <input type="password" name="password" placeholder="Parol kiriting">
                <button type="submit">Ok</button>
            </div>
    </form>

    <?php


        if (isset($_POST['login'])){
            echo "Tabriklayman siz ro'yhatdan o'tdingiz";
        }else{
            echo "Parol yoki login xato kiritdingiz qaytaddan urunib ko'ring";
        }

        if (isset($_POST['password'])){
            echo "Tabriklayman siz ro'yhatdan o'tdingiz";
        }else{
            echo "Parol yoki login xato kiritdingiz qaytaddan urunib ko'ring";
        }
    ?>
</body>
</html>