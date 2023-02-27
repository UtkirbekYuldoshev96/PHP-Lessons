<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php form bilan ishlash</title>
</head>
<body>
<form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p><span class="redColor">*</span> to'ldirish majburiy</p>
    <table>
        <tr>
            <td>ISM:</td>
            <td><input type="text" name="name"> <span class="redColor">*</span></td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td><input type="email" name="email"> <span class="redColor">*</span></td>
        </tr>
        <tr>
            <td>Website:</td>
            <td><input type="text" name="name"> <span class="redColor">*</span></td>
        </tr>
        <tr>
            <td>Izoh:</td>
            <td><textarea name="commet" cols="30" rows="10"></textarea> <span class="redColor">*</span></td>
        </tr>
        <tr>
            <td>Jinsi:</td>
            <td>
                erkak
                <input type="radio" name="genner" value="male">
                ayol
                <input type="radio" name="genner" value="female">
                <span class="redColor">*</span></td>
        </tr>
    </table>
    <input type="reset" value="Tozalash" style="width:100px">
    <input type="submit" value="Jo'natish" style="width:100px">
</form>


<?php
    // o'zgaruvchilarga boshlang'ich qiymat berish
    $name = $email = $genner = $commet = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $genner = test_input($_POST['genner']);
        $website = test_input($_POST['website']);
        $commet = test_input($_POST['commet']);


        echo $name . "<br>";
        echo $email . "<br>";
        echo $website . "<br>";
        echo $commet . "<br>";
        echo $genner . "<br>";
    }
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
</body>
</html>