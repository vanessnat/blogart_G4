<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numArt = $_GET['numArt'];
$article = sql_select("article INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem", "*", "numArt = $numArt")[0];
$thematiques = sql_select("thematique", "*");
?>


<!--Bootstrap form to edit a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Articles</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new article-->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
                <div class="form-group">
                    <input id="numArt" class="form-control" type="text" style="display: none" name="numArt" value="<?php echo ($article['numArt'])?>">
                    <label for="dtCreArt">Date</label>
                    <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt" value="<?php echo ($article['dtCreArt'])?>">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo ($article['libTitrArt'])?>">
                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt" value="<?php echo ($article['libChapoArt'])?>">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" value="<?php echo ($article['libAccrochArt'])?>">
                    <label for="parag1Art">Paragraphe 1</label>
                    <textarea id="story" name="story"rows="5" cols="33">
                    <?php echo ($article['parag1Art'])?>
                    </textarea>
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo ($article['libSsTitr1Art'])?>">
                    <label for="parag2Art">Paragraphe 2</label>
                    <textarea id="story" name="story"rows="5" cols="33">
                    <?php echo ($article['parag2Art'])?>
                    </textarea>
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo ($article['libSsTitr2Art'])?>">
                    <label for="parag3Art">Paragraphe 3</label>

                    <textarea id="story" name="story"rows="5" cols="33">
                    <?php echo ($article['parag3Art'])?>
                    </textarea>
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt" value="<?php echo ($article['libConclArt'])?>">
                    <label for="urlPhotArt">Illustration</label>
                    <input id="urlPhotArt" class="form-control" type="file" name="urlPhotArt" value="<?php echo ($article['urlPhotArt'])?>" accept="image/png, image/jpeg">
                    <label for="numThem" class="title">Thématiques</label>  
                    <select name="numThem" >
                    <option value="<?php echo ($article['numThem'])?>"><?php echo ($article['libThem'])?></option> 
                    <?php foreach($thematiques as $thematique){ ?>
                    <option value="<?php echo $thematique['numThem']; ?>"><?php echo $thematique['libThem']; ?></option> 
                    <?php } ?>
                    </select>
                    </select>

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Mettre à jour l'article</button>
                </div>
            </form>
        </div>
    </div>
</div>