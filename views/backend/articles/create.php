<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new article-->
<Body style="background-color: #ECECEC">
<link rel="stylesheet" href="/src/css/style.css">
<img src="/src/css/Accueil Image.png" class="img-fluid">
<div class="container">
    <div class="card text-bg card-box" >
        <div class="card-img-overlay">
            <h1 class="card-title text-center">Création d'articles</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text-area" name="libTitrArt">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" class="form-control" type="text-area" name="libChapoArt">
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text-area" name="libAccrochArt">
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" class="form-control" type="text-area" name="parag1Art">
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text-area" name="libSsTitr1Art">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" class="form-control" type="text-area" name="parag2Art">
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text-area" name="libSsTitr2Art">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" class="form-control" type="text-area" name="parag3Art">
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text-area" name="libConclArt">
                </div>
                <div class="form-group">
                    <label for="urlPhotArt">Illustration</label>
                    <input id="urlPhotArt" class="form-control" type="file" name="urlPhotArt">
                </div>
                <div class="form-group">
                    <label for="numThem">Thématique</label>
                    <select id="numThem" class="form-control" type="text-area" name="numThem">
                </div>
                    <option value="">--Choisissez un thème--</option>
                    <option value="Histoires">Histoires et secrets</option>
                    <option value="Lieux">Lieux et monuments</option>
                    <option value="Actualités">Actualités</option>
                    </select>
                </div>
                <div class="form-group mt-2 text-center">
                    <for button type="submit" class="btn">Publier</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';

?>