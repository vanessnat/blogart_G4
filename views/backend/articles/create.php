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
                    <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="form-groupedit">
                            <label for="dtCreArt">Date</label>
                            <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt">

                            <label for="libTitrArt">Titre</label>
                            <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">

                            <label for="libChapoArt">Chapô</label>
                            <textarea id="libChapoArt" class="form-control" name="libChapoArt" rows="5" cols="80"></textarea>

                            <label for="libAccrochArt">Accroche</label>
                            <input id="libAccrochArt" class="form-control" type="text-area" name="libAccrochArt">

                            <label for="parag1Art">Paragraphe 1</label>
                            <textarea id="parag1Art"  class="form-control" name="parag1Art" rows="5" cols="80"></textarea>

                            <label for="libSsTitr1Art">Sous-titre 1</label>
                            <input id="libSsTitr1Art" class="form-control" type="text-area" name="libSsTitr1Art">

                            <label for="parag2Art">Paragraphe 2</label>
                            <textarea id="parag2Art" class="form-control" name="parag2Art" rows="5" cols="80"></textarea>

                            <label for="libSsTitr2Art">Sous-titre 2</label>
                            <input id="libSsTitr2Art" class="form-control" type="text-area" name="libSsTitr2Art">

                            <label for="parag3Art">Paragraphe 3</label>
                            <textarea id="parag3Art" class="form-control" name="parag3Art" rows="5" cols="80"></textarea>
                            
                            <label for="libConclArt">Conclusion</label>
                            <textarea id="libConclArt"  class="form-control" name="libConclArt" rows="5" cols="80"></textarea>

                            <label for="urlPhotArt">Illustration</label>
                            <input id="file" class="form-control" type="file" name="file">

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