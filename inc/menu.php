<?php

$menu = [
    "accueil" => "index.php",
    "login" => "login.php",
    "register" => "register.php",
    "upload" => "upload.php",    
    "lire" => "lireFichier.php",
    "ecrire" => "ecrireFichier.php",
    "upload2" => "upload2.php",
    "force upload" => "upload3.php",    
];

$menuHTML = "<ul>";

foreach ($menu as $key => $val) {
    $menuHTML .= "<li>" . "<a href='".$val."'>".$key."</a>" . "</li>";
}

$menuHTML .= "</ul>";

echo $menuHTML;

?>