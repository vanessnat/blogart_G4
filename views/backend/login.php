<?php
include '../../header.php';

?>

<Body style="background-color: #ECECEC">
<link rel="stylesheet" href="/src/css/style.css">
<img src="/src/css/Accueil Image.png" class="img-fluid">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="bloc-article3">
                <h1 class="choix-arttext">Connexion</h1>
            </div>
        </div>
        <div class="col-md-12">
            <!--Form to create a new member-->
            <form action="<?php echo ROOT_URL . '/members/list.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="" required>
                    <label for="passMemb">Mot-de-passe</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb" value="" required>
                    <input id="numStat" style="display: none" class="form-control" type="text" name="numStat" >
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../footer.php'; // contains the footer

?>