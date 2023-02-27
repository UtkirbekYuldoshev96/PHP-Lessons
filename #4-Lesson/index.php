<?php
// string functions

//$str = "PHP da dasturlash tilida strng";
//echo strlen($str);
$str = "<br> PHP da dasturlash tilida strng";
echo strtolower($str);

$str = "<br> PHP da dasturlash tilida strng";
echo strtoupper($str);

$str = "<br> PHP da dasturlash tilida strng <br>";
echo trim($str);

$satr = "88888 PHP-8.1 88888";
echo trim($satr, "8");

$soft = "Programmer";
$phone = "Phon";
echo $phone . substr($soft,0,3);


$search_str = "<br> Dasturlashda nimalar -  qilsa buladi";
echo str_replace("nimalar", "ko'p narsa", $search_str);
?>