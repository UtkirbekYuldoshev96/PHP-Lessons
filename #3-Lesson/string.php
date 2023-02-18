<?php
$matn = "Welcom" . "<br>";
echo $matn;
echo "Matin uzunligi ".strlen($matn);
$texts = "<br> PHP dasturchi!";
echo $texts;
echo "<br>so'zlar uzunligi " . str_word_count($texts);
$php = "backend";
echo "<br> " . strrev($php);
$search = "Assalomu allaykum PHP = ";
//echo strpos("PHP" , $search);
echo str_replace("PHP" , 'Javascript', $search);
echo "\0";
echo trim($php);

?>