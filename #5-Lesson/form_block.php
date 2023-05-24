<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From and PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $commit = $website = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
//        name yani ism tekshiradi
        if (empty($_POST['name'])){
            $nameErr = "Ism kiritilmadi";
        }else{
            $name = inputName($_POST['name']);
        }

//        emailni tekshiramiz
        if(empty($_POST['email'])){
            $emailErr = "email notug'ri kiritildi";
        }else{
            $email = inputName($_POST['email']);
        }

// website tekshiramiz
        if (empty($_POST['website'])){
            $websiteErr = "";
        }else{
            $website = inputName($_POST['website']);
        }
//        commit tekshiramiz
        if (empty($_POST['commit'])){
            $commit = "";
        }else{
            $commit = inputName($_POST['commit']);
        }

//        Jinslarni tekshiradi
        if (empty($_POST['gender'])){
            $gender = "Jins kiritilmadi!";
        }else{
            $gender = inputName($_POST['gender']);
        }
    }

    function inputName($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<div class="d-flex">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="w-25">
        <input type="text" name="name" class="form-control p-2 m-2" placeholder="Ism kiriting">
        <input type="email" name="email" class="form-control p-2 m-2" placeholder="Elekton pochta">
        <input type="website" name="website" class="form-control p-2 m-2" placeholder="Veb saytingizni kiritng">
        <textarea name="commit" class="form-control p-2 m-2" cols="30" rows="10"></textarea>
    <label class="form-control p-2 m-2">
        Jinsingizni tanlang:
        Erkak <input type="radio" name="gender" value="male">
        Ayol <input type="radio" name="gender" value="famale">
    </label>
    <input type="reset" value="Tozalash" class="form-control btn btn-danger p-2 m-2">
    <input type="submit" value="Jo'natish" name="n" class="form-control btn btn-primary p-2 m-2">
</form>

<table class="table w-75 p-2 m-3 border">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Ism</th>
        <th scope="col">Elektron pochta</th>
        <th scope="col">Veb-ilova</th>
        <th scope="col">Commit</th>
    </tr>
    </thead>
    <tbody>
    <tr>
<?php
//            for ($i=0; $i<=$_POST['n']; $i++){
//                echo `<th scope="row">` . $name .`</th>`;
//                echo `<td>` . $email .`</td>`;
//                echo `<td>` . $website .`</td>`;
//                echo `<td>` . $commit .`</td>`;
//            }
    session_set_cookie_params(3600);


?>

    </tr>
    </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>