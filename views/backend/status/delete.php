
<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numStat = $_GET['numStat'];
$libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat']; 

?>


<!--Bootstrap form to delete a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression d'un statut</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Statut sélectionné</label>
                    <input id="numStat" class="form-control" style="display: none" type="text" name="numStat" value="<?php echo ($numStat)?>" readonly="readonly">
                    <input id="libStat" class="form-control" type="text" name="libStat" value="<?php echo ($libStat)?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Supprimer statut</button>
                </div>
            </form>
        </div>
    </div>
</div>

