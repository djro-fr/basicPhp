
<!-- HEADER -->
<?php
    require_once(__DIR__.'/inc/const.php');
    $h1 = "Login";

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

<form action="login.php" method="POST">
    <div>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required>
    </div>
    <div>
        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd" required>
    </div>
    <input type="submit" name="submit" id="submit" value="Valider">  
</form>

<!-- FOOTER -->
<?php
    require_once(__DIR__.'/inc/footer.php');
?>