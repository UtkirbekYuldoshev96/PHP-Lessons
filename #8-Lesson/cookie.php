<?php

$languages = ["uz","ru", "en"];

echo "<ul>";
foreach($languages as $itemsLanguages){
    echo "<li>";
        echo "<a href='?lan=".$itemsLanguages."'>$itemsLanguages</a>";
    echo "</li>";
}
echo "</ul>";

if (isset($_GET['lan']) and in_array($_GET['lan'],$itemsLanguages)){
    $lan = $_GET['lan'];
    setcookie("lan",$lan, time() + 3600, '/');
}

if (isset($_COOKIE['lan']) and in_array($_COOKIE['lan'], $itemsLanguages)){
    $lan = $_COOKIE['lan'];
    if ($lan == 'uz'){
        $text = "Uzbekston";
    }elseif ($lan == 'ru'){
        $text = "Russian";
    }elseif ($lan == 'en'){
        $text = "Dunyoning yarmi shu tilda gaplashadi sen nimaga bilaysan!";
    }

    echo "<h2>" . $text . "</h2>";
}
?>