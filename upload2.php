
<!-- HEADER -->
<?php    
    require_once(__DIR__.'/inc/const.php');
    $h1 = "Upload avec écriture fichier depuis formulaire";

    require_once(__DIR__.'/inc/header.php');
?>

<!-- MAIN -->
<?php
    echo "<nav class='menuListe'>";
    require_once(__DIR__.'/inc/menu.php');
    echo "</nav>";

    if (isset($_POST["submit"])) {
        $filesDir = "./files//";
        $uploadFile = $filesDir. md5(uniqid()) ."__". basename($_FILES['monFichier']['name']);
        // en utilisant ici le md5+uniqid, on évite l'écrasement d'un fichier par un autre
        if (move_uploaded_file($_FILES['monFichier']['tmp_name'], $uploadFile)) {
            echo "le fichier est valide." ;
        }
    }
?>

<form action="upload2.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="monFichier">Fichier</label>
        <input type="file" name="monFichier" id="monFichier" required>
    </div>

    <input type="submit" name="submit" id="submit" value="Valider">  
</form>

<!-- FOOTER -->
<?php
    require_once(__DIR__.'/inc/footer.php');
?>