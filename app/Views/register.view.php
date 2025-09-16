<?php
    require_once __DIR__ . "/partials/head.php";
?>
<h1 class ="d-flex justify-content-center text-warning">Inscription</h1>
<form method = "post">
    <label for="pseudo">Nom d'utilisateur :</label>
    <input type="text" placeholder = "Rapido&Razmodu78" name = "pseudo" >
    <label for="password">Mot de Passe :</label>
    <input type="password" placeholder = "mot de passe" name = "password" >
    <label for="email"> Adresse Mail :</label>
    <input type="email" placeholder ="exemple@gmail.com" name = "email" >
    <button type = "submit">S'inscrire</button>
</form>


<?php
    require_once __DIR__ . "/partials/footer.php";
