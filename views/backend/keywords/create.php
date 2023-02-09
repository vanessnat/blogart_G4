<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new keyword-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau mot-clé</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new keyword-->
            <form action="<?php echo ROOT_URL . '/api/keywords/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Saisir un mot-clé :</label>
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer mot-clé</button>
                </div>
            </form>
        </div>
    </div>
</div>