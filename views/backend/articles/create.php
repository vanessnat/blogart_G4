<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new article-->
<Body style="background-color: #ECECEC">
<img src="/src/css/Accueil Image.png" class="img-fluid">
<div class="container">
    <div class="card text-bg">
        <img src="/src/css/Marbre 1.png" class="img-fluid" class="card-img">
        <div class="card-img-overlay">
            <h1 class="card-title text-center">Création d'articles</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="dtCreArt">Date</label>
                    <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">
                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt">
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" class="form-control" type="text-area" name="parag1Art">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" class="form-control" type="text-area" name="parag2Art">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" class="form-control" type="text-area" name="parag3Art">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt">
                    <label for="urlPhotArt">Illustration</label>
                    <input id="urlPhotArt" class="form-control" type="file" name="urlPhotArt">
                    <label for="numThem">Thématique</label>
                    <select id="numThem" class="form-control" type="text" name="numThem">
                    <option value="">--Choisissez un thème--</option>
                    <option value="dog">Histoires et secrets</option>
                    <option value="cat">Lieux et monuments</option>
                    <option value="hamster">Actualités</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';

?>