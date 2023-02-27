<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form bilan ishlash</title>
    <style>
        img{
            width: 100%;
        }
        form {
            background-color: darkblue;
            width: 600px;
            height: 400px;
            margin: 0 auto;
            padding: 10px;
        }
        form img{
            position: relative;
            top: 22%;
            left: 50%;
            right: 50%;
            transform: translate(-50%,-50%);
            width: 180px;
        }
        form .input {
            width: 300px;
            display: block;
            padding: 8px;
            margin: 10px auto;
        }
        form .btn {
            width: 300px;
            display: block;
            padding: 8px;
            margin: 10px auto;
            font-size: 1.5rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
if (!isset($_GET['s1'])) {
    ?>
    <form action="formList.php" method="get">
        <img src="https://e7.pngegg.com/pngimages/884/766/png-clipart-graphy-postage-stamps-others-text-logo-thumbnail.png"
             alt="">
        <input type="text" name="login" class="input">
        <input type="password" name="password" class="input"><br>
        <input type="submit" class="btn" name="s1" value="Jo'natish">
    </form>
    <?php
} else {
    if (($_GET['login'] == "login") and ($_GET['password'] == "12345678")) {
        echo "<h2>Xush kelisiz saytga</h2>";
    } else {
        echo "<h2>Login yoki parolda xato bor!</h2>";
    }
}
?>
</body>
</html>