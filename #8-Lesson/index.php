<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $arrName =  array("Dushanba", "Seshanba", "Chorshanba", "Payshanba", "Juma", "Shanba", "Yakshanba");
    foreach ($arrName as $listBout){
        echo $listBout . " <br>";
    }

    for ($i=0; $i<count($arrName); $i++){
        echo $arrName[$i] . "<hr>";
    }


    $arFirstName = array(
            'name' => "Jon",
            'firstName' => "Jonatan",
            'jobs' => "Search",
            'kompanisa' => "GM",
    );

    foreach($arFirstName as $key=>$item){
        echo "Key: ".$key." Qiymati: ". $item . "<br>";
    }
?>

</body>
</html>