<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For skil operatori tablitsa qilib olamiz</title>
</head>
<body>
    <table border="1" width="700">
        <?php
        for ($i=1; $i<=7; $i++){
            echo "<tr>";
            for ($j =1; $j<=5; $j++){
                echo "<td>". $j. "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>