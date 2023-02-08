<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numMotCle = $_GET['numMotCle'];
$motcle = sql_select("motcle", "*", "numMotCle = $numMotCle")[0];


?>


<!--Bootstrap form to edit a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit keywords</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new member-->
            <form action="<?php echo ROOT_URL . '/api/keywords/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMotCle">numéro mot clé</label>
                    <input id="numMotCle" class="form-control" type="text"  style="display: none" name="numMotCle" value="<?php echo ($motcle['numMotCle'])?>">
                    <label for="libMotCle">Mots-clés</label>
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo ($motcle['libMotCle'])?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>