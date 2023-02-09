
<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$likeA = $_GET['LlikeA'];
$likeA = sql_select("likes", "likeA", "numArt" "numMemb = $numMemb")[0]['nomMemb']; 

?>


<!--Bootstrap form to delete a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-12">
            <!--Form to delete a new member-->
            <form action="<?php echo ROOT_URL . '/api/users/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="nomMemb">Membre selectionné</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo ($numMemb)?>" readonly="readonly">
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo ($nomMemb)?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Déliker?</button>
                </div>
            </form>
        </div>
    </div>
</div>
