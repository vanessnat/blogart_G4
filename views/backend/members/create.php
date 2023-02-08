<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new Member</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new member-->
            <form action="<?php echo ROOT_URL . '/api/users/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">
                    <label for="passMemb">Mot-de-passe</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">
                    <label for="eMailMemb">E-mail</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb">
                    <label for="dtCreMemb">Date</label>
                    <input id="dtCreMemb" class="form-control" type="text" name="dtCreMemb" pattern=".+@globex\.com" size="30" required>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>