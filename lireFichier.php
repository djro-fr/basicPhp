
<!-- HEADER -->
<?php    
    require_once(__DIR__.'/inc/const.php');
    $h1 = "Lecture et Affichage Fichier";

    require_once(__DIR__.'/inc/header.php');
?>

<!-- MAIN -->
<?php
    echo "<nav class='menuListe'>";
    require_once(__DIR__.'/inc/menu.php');
    echo "</nav>";

    $file = './files/data.csv';
    echo "<p class='content'> On lit le fichier <em> ".$file."</em></p>";

    $row = 0;
    if (($handle = fopen($file, "r")) !== FALSE) {
        //On ouvre le fichier (en lecture seule) si c'est possible
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){
            if ($row > 0){
                //row > 0 permet d'accéder aux données sans lire la première ligne du CSV
                $num = count($data);
                echo "<p class='content'><strong>Ligne $row : </strong>";
                for ($c=0; $c < $num ; $c++) { 
                    if ($c > 0) {echo " /// ";}
                    echo $data[$c];
                }
                echo "</p>";
            }
            $row++;
        }
        fclose($handle);
    }

?>

<!-- FOOTER -->
<?php
    require_once(__DIR__.'/inc/footer.php');
?>