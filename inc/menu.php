<?php

$menu = [
    "login" => "login.php",
    "register" => "register.php",
    "upload" => "upload.php",
    "home" => "index.php"
];

$menuHTML = "<ul>";

foreach ($menu as $key => $val) {
    $menuHTML .= "<li>" . "<a href='".$val."'>".$key."</a>" . "</li>";
}

$menuHTML .= "</ul>";

echo $menuHTML;

?>