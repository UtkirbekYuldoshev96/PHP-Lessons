<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP iindex.uz</title>
</head>
<body>

<form action="" method="post">
    <label for="field1">Field 1:</label>
    <input type="text" id="field1" name="field1"><br><br>

    <label for="field2">Field 2:</label>
    <input type="text" id="field2" name="field2"><br><br>

    <label for="field3">Field 3:</label>
    <input type="text" id="field3" name="field3"><br><br>

    <label for="field4">Field 4:</label>
    <input type="text" id="field4" name="field4"><br><br>

    <label for="field5">Field 5:</label>
    <input type="text" id="field5" name="field5"><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    $field3 = $_POST["field3"];
    $field4 = $_POST["field4"];
    $field5 = $_POST["field5"];

    // Do something with the fields here
}
?>
<!---->
<?php
//for ($i=1; $i <=200; $i++){
//    if ($i%5 == 2){
//        echo $i . "<br>";
//    }
//}
//
//$data = 50;
//?>

        <table border="1">
            <tr>
                <th>#</th>
            </tr>
                <tr>
                    <?php for ($i = 1; $i <= 100; $i++): ?>
                        <td><?= $i; ?></td>
                    <?php endfor; ?>
                </tr>
        </table>
</body>
</html>