<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$likeA = $_GET['numArt'];
$libStat = sql_select("likeart", "numArt", "likeA = $likeA")[0]['numArt']; 

?>


<!--Bootstrap form to edit a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-12">
            <!--Form to edit a new status-->
            <form action="<?php echo ROOT_URL . '/api/likes/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="likeA">J'aime selectionné</label>
                    <input id="numArt" class="form-control" style="display: none "type="text" name="numArt" value="<?php echo ($numArt)?>" >
                    <input id=" numMemb" class="form-control" type="text" name="numMemb" value="<?php echo ($numMemb)?>" >
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>