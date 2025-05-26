
<!-- HEADER -->
<?php    
    require_once(__DIR__.'/inc/const.php');
    $h1 = "Upload";

    require_once(__DIR__.'/inc/header.php');
?>

<!-- MAIN -->
<?php
    echo "<nav class='menuListe'>";
    require_once(__DIR__.'/inc/menu.php');
    echo "</nav>";

    if (isset($_POST["submit"])) {
        var_dump($_FILES);
        die();
    }
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
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