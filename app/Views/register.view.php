<?php
    require_once __DIR__ . "/partials/head.php";
?>
<h1 class ="d-flex justify-content-center text-warning">Inscription</h1>
<form method = "post">

    <div class="container">
        <div class="form-group">
            <label for="pseudo" class="form-label">Nom d'utilisateur :</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Toto" class="form-control">
            <?php 
            if(isset($arrayError['pseudo'])){
                ?>
                    <p class="text-danger"><?= $arrayError['pseudo']?></p>
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Adresse Mail :</label>
            <input type="email" name="email" id="email" placeholder="Toto@gmail.com" class="form-control">
            <?php 
            if(isset($arrayError['email'])){
                ?>
                    <p class="text-danger"><?= $arrayError['email']?></p>
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <label for="password" class="form-label ">Mot de Passe :</label>
            <input type="password" name="password" id="password" class="form-control">
            <?php 
            if(isset($arrayError['password'])){
                ?>
                    <p class="text-danger"><?= $arrayError['password']?></p>
                <?php
            }
            ?>
        </div>
        <button type="submit" class="btn btn-success mt-5">Inscription</button>
    </div>

</form>


<?php
    require_once __DIR__ . "/partials/footer.php";
