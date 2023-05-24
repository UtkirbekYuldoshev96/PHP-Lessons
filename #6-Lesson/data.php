<?php
//require "data.json";
//    setcookie("name", "php dahttp surovlar");
//    var_dump($_COOKIE['name']);

//session_start();
//$_SESSION['userName'] = "foydalanuvchi user id";
$age =  array("Ism:"=>"Jahon", "Yoshi:"=>"25", "jobs:"=>"ByCom korhonasida");
$json = '{
    "id": 1,
    "name": "Leanne Graham",
    "username": "Bret",
    "email": "Sincere@april.biz",
    "address": {
      "street": "Kulas Light",
      "suite": "Apt. 556",
      "city": "Gwenborough",
      "zipcode": "92998-3874",
      "geo": {
        "lat": "-37.3159",
        "lng": "81.1496"
      }
    },
    "phone": "1-770-736-8031 x56442",
    "website": "hildegard.org",
    "company": {
      "name": "Romaguera-Crona",
      "catchPhrase": "Multi-layered client-server neural-net",
      "bs": "harness real-time e-markets"
    }
  }';

$object = json_decode($json);

//echo json_encode($age);
echo json_encode($json);

//echo $object->id;
?>