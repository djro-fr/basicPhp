
<!-- HEADER -->
<?php    
    require_once(__DIR__.'/inc/const.php');
    $h1 = "Ecriture Fichiers";

    require_once(__DIR__.'/inc/header.php');
?>

<!-- MAIN -->
<?php
    echo "<nav class='menuListe'>";
    require_once(__DIR__.'/inc/menu.php');
    echo "</nav>";

    $file1 = './files/demo.txt';
    file_put_contents($file1, "Bonjour l'ami(e) !");
    echo file_get_contents($file1);

    $file2 = './files/demo2.txt';
    $fichier = fopen($file2, "c+b");
    fwrite($fichier, "Fichier numéro deux !");
    echo "<br/><br/>";
?>

<!-- FOOTER -->
<?php
    require_once(__DIR__.'/inc/footer.php');
?>