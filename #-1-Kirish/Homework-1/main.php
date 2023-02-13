<?php
$ism = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$manzil = $_GET['manzil'];
$id = $_GET['id'];
//$submit = $_GET['submit'];

echo `<h2>F.I.SH: {$ism}</h2>`;
echo `<h2>Elektron pochta: {$email}</h2>`;
echo `<h2>Telefon raqam: {$phone}</h2>`;
echo `<h2>Manzil: {$manzil}</h2>`;
echo `<h2>Id: {$id}</h2>`;


?>