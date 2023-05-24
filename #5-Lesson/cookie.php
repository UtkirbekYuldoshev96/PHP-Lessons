<?php
setcookie('name', 'cookie ishlamoqda', time() + 86400);
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cookie bilan ishlash</title>
</head>
<body>
<?php
    echo $_COOKIE['name'] . "<br>";
    $_SESSION['fursName'] = "Session orqali ma'lumot yozdik!";
    echo $_SESSION['fursName'] . "<br>";
    echo $_SESSION['fursName'];
    session_unset();

//    uzgarmash uzgaruvchilardan yani const bilan ishlash
    define("Ism", "Sherzod");
    echo Ism;
?>
</body>
</html>