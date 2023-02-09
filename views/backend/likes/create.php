<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . 'views/backend/likes/create.php' ?>" method="post">
                <div class="form-group">
                    
                    <input id="numMemb" class="form-control" type="text-area" name="parag3Art">
                    <label for="libConclArt">Conclusion</label>
                    
                    <select id="likeA" class="form-control" type="button" name="likeA">
                    
                    </select>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>