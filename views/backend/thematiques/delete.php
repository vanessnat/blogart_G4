
<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numStat = $_GET['numThem'];
$libStat = sql_select("thematique", "libThem", "numThem = $numThem")[0]['libThem']; 

?>


<!--Bootstrap form to delete a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer une thèmatique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a new status-->
            <form action="<?php echo ROOT_URL . '/api/thematiques/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Libéllé</label>
                    <input id="numThem" class="form-control" style="display: none" type="text" name="numThem" value="<?php echo ($numThem)?>" readonly="readonly">
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo ($libThem)?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

