
<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numArt = $_GET['numArt'];
$libTitrArt = sql_select("article", "libTitrArt", "numArt = $numArt")[0]['libTitrArt']; 

?>


<!--Bootstrap form to delete a new article-->
<div class="container">
    <div class="delete-page">
        <div class="row">
            <div class="col-md-12">
                <h1>Suppression d'un article</h1>
            </div>
            <div class="col-md-12">
                <!--Form to delete a new article-->
                <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                    <div class="form-group">
                        <label for="libTitrArt">Article selectionné</label>
                        <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo ($numArt)?>" readonly="readonly">
                        <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo ($libTitrArt)?>" readonly="readonly">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-danger">Supprimer l'article</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../../../footer.php'; // contains the footer

?>
