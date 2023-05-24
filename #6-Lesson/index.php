<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ro'yhatdan o'tish</title>
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="contaner">
    <div class="row">
        <div class="col-6">
           <div class="form-center ">
               <h2 class="text-center">Ro'yhatdan o'tish</h2>
        <!-- ===== FORM STRAT ======================== -->
               <form action="index.php" method="post">
                   <div class="form-row d-flex">
                       <div class="form-group col-md-6 w-50 p-1 m-1">
                           <input type="text" name="name" placeholder="Ism Familiya*" class="form-control" required>
                       </div>
                       <div class="form-group col-md-6 w-50 p-1 m-1">
                           <input type="tel" name="tel" placeholder="+9989(_ _)_ _ _ - _ _ - _ _*" class="form-control" required>
                       </div>
                   </div>
                   <div class="form-row d-flex">
                       <div class="form-group col-md-6 p-1 m-1">
                           <label for="jisnni_tanlash" class="w-100">
                               <select name="jins" class="form-control" id="jisnni_tanlash">
                                   <option value="jins">Jisn</option>
                                   <option value="erkak">Erkak</option>
                                   <option value="ayol">Ayol</option>
                               </select>
                           </label>
                       </div>
                       <div class="form-group col-md-6 w-50 p-1 m-1">
                           <input type="date" name="data" class="form-control" placeholder="Tug'ilgan sana*" required>
                       </div>
                   </div>

                   <div class="form-row d-flex">
                       <div class="form-group col-md-6 w-50 p-1 m-1">
                           <input type="password" name="password" class="form-control" placeholder="Parol qo'ying*" required>
                       </div>
                       <div class="form-group col-md-6 w-50 p-1 m-1">
                           <input type="password" name="password" class="form-control" placeholder="Parolni qayta yozing*" required>
                       </div>
                   </div>
                   <button type="submit" class="btn btn-primary w-100 p-1 m-1">Tasdiqlash</button>
                   <p class="text-center">Akkountingiz bormi <span><a href="#" style="text-decoration: none">Kirish</a></span></p>
               </form>
     <!-- ===== FORM STRAT END =============== -->
           </div>
        </div>
        <div class="col-6">
            <img src="https://static10.tgstat.ru/channels/_0/94/949958e0184e9471aab9bebb3c2fa75b.jpg" alt="imag">
        </div>
    </div>
</div>

<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$jins = $_POST['jins'];
$password = $_POST['password'];

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $jins = $_POST['jins'];
    $password = $_POST['password'];

    if(filter_var($tel, FILTER_VALIDATE_INT) === true){
        echo "Sizning ma'lumotlaringiz bazaga kiritildi!";
    }else{
        echo "Siz tefelfon raqamingiz notug'ri kiritingiz qayta urib kuring!";
    }
}

?>

<p>Ismingiz: <?= $name ?></p>
<p>Telefon raqam: <?= $tel ?></p>
<p>Jins: <?= $jins ?></p>
<p>Parol: <?= $password ?></p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>