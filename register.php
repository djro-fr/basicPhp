
<!-- HEADER -->
<?php    
    require_once(__DIR__.'/inc/const.php');
    $h1 = "Inscription";

    require_once(__DIR__.'/inc/header.php');
?>

<!-- MAIN -->
<?php
    echo "<nav class='menuListe'>";
    require_once(__DIR__.'/inc/menu.php');
    echo "</nav>";

    if (isset($_POST["submit"])) {
        var_dump($_POST);
        die();
    }
?>

<form action="register.php" method="POST">
    <div>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required>
    </div>
    <div>
        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd" required>
    </div>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>
    </div>
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>
    </div>
    <input type="submit" name="submit" id="submit" value="Valider">  
</form>

<!-- FOOTER -->
<?php
    require_once(__DIR__.'/inc/footer.php');
?>