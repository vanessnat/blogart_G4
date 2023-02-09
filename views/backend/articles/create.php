<?php
include '../../../header.php';
$thematiques = sql_select("thematique", "*");
?>

<!--Bootstrap form to create a new article-->
<Body style="background-color: #ECECEC">
<link rel="stylesheet" href="/src/css/style.css">
<img src="/src/css/Accueil Image.png" class="img-fluid">
<div class="container-create">
    <div class="card text-bg bloc-article">
        <div class="card-img-overlay">
            <h1 class="card-title text-center creat-article">Création d'articles</h1>
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
                    <input id="libAccrochArt" class="form-control" type="text-area" name="libAccrochArt">
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1</label>
                    <textarea id="story" name="story"rows="5" cols="33">
                    </textarea>

                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text-area" name="libSsTitr1Art">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2</label>
                    <textarea id="story" name="story"rows="5" cols="33">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text-area" name="libSsTitr2Art">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3</label>
                    <textarea id="story" name="story"rows="5" cols="33">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt">

                    <label for="urlPhotArt">Illustration</label>
                    <input id="urlPhotArt" class="form-control" type="file" name="urlPhotArt">

                    <label for="numThem" class="title">Thématiques</label>  
                    <select name="numThem" >
                    <option value="">--Choisissez un thème--</option> 
                    <?php foreach($thematiques as $thematique){ ?>
                    <option value="<?php echo $thematique['numThem']; ?>"><?php echo $thematique['libThem']; ?></option> 
                    <?php } ?>
                    </select>

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer l'article</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';

?>