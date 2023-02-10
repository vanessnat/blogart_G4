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
            <h1 class="card-title text-center create-articles">Création d'articles</h1>
        </div>
    </div>
    <tbody>
        <section>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype='multipart/form-data'>
                        <div class="form-groupedit">
                            <label for="dtCreArt">Date</label>
                            <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt">
                            <label for="libTitrArt">Titre</label>
                            <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">
                            <label for="libChapoArt">Chapô</label>
                            <input id="libChapoArt" class="form-control" type="text" name="libChapoArt">
                            <label for="libAccrochArt">Accroche</label>
                            <input id="libAccrochArt" class="form-control" type="text-area" name="libAccrochArt">
                            <div class="create-para1">
                                <label for="parag1Art">Paragraphe 1</label>
                            </div>
                            <div class="para-textarea">
                                <textarea id="story" name="story"rows="5" cols="80">
                                </textarea>
                            </div>
                            <label for="libSsTitr1Art">Sous-titre 1</label>
                            <input id="libSsTitr1Art" class="form-control" type="text-area" name="libSsTitr1Art">
                            <div class="create-para2">
                                <label for="parag2Art">Paragraphe 2</label>
                            </div>
                            <div class="para-textarea">
                                <textarea id="story" name="story"rows="5" cols="80">
                                </textarea>
                            </div>
                            <label for="libSsTitr2Art">Sous-titre 2</label>
                            <input id="libSsTitr2Art" class="form-control" type="text-area" name="libSsTitr2Art">
                            <div class="create-para3">
                                <label for="parag3Art">Paragraphe 3</label>
                            </div>
                            <div class="para-textarea">
                                <textarea id="story" name="story"rows="5" cols="80">
                                </textarea>
                            </div>
                            <label for="libConclArt">Conclusion</label>
                            <input id="libConclArt" class="form-control" type="text" name="libConclArt">

                            <label for="urlPhotArt">Illustration</label>
                            <input id="urlPhotArt" class="form-control" type="file" name="file" accept="image/png, image/jpeg">

                            <label for="numThem" class="title">Thématiques</label>  
                            <select name="numThem" >
                                <option value="">--Choisissez un thème--</option> 
                                <?php foreach($thematiques as $thematique){ ?>
                                    <option value="<?php echo $thematique['numThem']; ?>"><?php echo $thematique['libThem']; ?></option> 
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-creer">Créer un article</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </tbody>
</div>

<?php
include '../../../footer.php';

?>