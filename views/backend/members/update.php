<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numMemb = $_GET['numMemb'];
$membre = sql_select("membre", "*", "numMemb = $numMemb")[0];


?>


<!--Bootstrap form to edit a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit users</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new member-->
            <form action="<?php echo ROOT_URL . '/api/users/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo ($membre['prenomMemb'])?>">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo ($membre['nomMemb'])?>">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="<?php echo ($membre['pseudoMemb'])?>">
                    <label for="passMemb">Mot-de-passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb" value="<?php echo ($membre['passMemb'])?>"  minlength="8">
                    <label for="eMailMemb">E-mail</label>
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb" value="<?php echo ($membre['eMailMemb'])?>" size="30">
                    <label for="dtCreaMemb">Date</label>
                    <input id="dtCreaMemb" class="form-control" type="datetime-local" name="dtCreaMemb" value="<?php echo ($membre['dtCreaMemb'])?>">
                    <label for="numStat">Statut</label>
                    <input id="numStat" class="form-control" type="text" name="numStat" value="<?php echo ($membre['numStat'])?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>