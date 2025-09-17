<?php
    require_once(__DIR__ . '/partials/head.php');
?>

<h1 class = 'd-flex justify-content-center'>Connection</h1>
<form method= 'post'>
    <div class="container">
        <div class="form-group">
            <label for="email" class="form-label">Adresse mail :</label>
            <input type="email" name ='email' placeholder='exemple@gmail.com' class='form-control'>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Mot de Passe :</label>
            <input type="password" name ='password' class='form-control'>
        </div>
        <button type="submit" class="btn btn-success mt-5">Connection</button>
    </div>
</form>
<?php


    require_once(__DIR__ . '/partials/footer.php');
?>