<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numStat = $_GET['numThem'];
$libStat = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem']; 

?>


<!--Bootstrap form to edit a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier thèmatique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new status-->
            <form action="<?php echo ROOT_URL . '/api/thematiques/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Thèmatique selectionnée</label>
                    <input id="numThem" class="form-control" style="display: none "type="text" name="numThem" value="<?php echo ($numThem)?>" >
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo ($libThem)?>" >
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>