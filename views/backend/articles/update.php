<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$numArt = $_GET['numArt'];
$article = sql_select("article", "*", "numArt = $numArt")[0];
/*
$dtCreArt = sql_select("article", "dtCreArt", "numArt = $numArt")[0]['dtCreArt']; 
$libTitrArt = sql_select("article", "libTitrArt", "numArt = $numArt")[0]['libTitrArt']; 
$libChapoArt = sql_select("article", "libChapoArt", "numArt = $numArt")[0]['libChapoArt']; 
$libAccrochArt = sql_select("article", "libAccrochArt", "numArt = $numArt")[0]['libAccrochArt']; 
$parag1Art = sql_select("article", "parag1Art", "numArt = $numArt")[0]['parag1Art']; 
$libSsTitr1Art = sql_select("article", "libSsTitr1Art", "numArt = $numArt")[0]['libSsTitr1Art']; 
$parag2Art = sql_select("article", "parag2Art", "numArt = $numArt")[0]['parag2Art']; 
$libSsTitr2Art = sql_select("article", "libSsTitr2Art", "numArt = $numArt")[0]['libSsTitr2Art']; 
$parag3Art = sql_select("article", "parag3Art", "numArt = $numArt")[0]['parag3Art']; 
$libConclArt = sql_select("article", "libConclArt", "numArt = $numArt")[0]['libConclArt']; 
$urlPhotArt = sql_select("article", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt']; 
$numThem = sql_select("article", "numThem", "numArt = $numArt")[0]['numThem']; 
*/

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
                    <label for="dtCreArt">Date</label>
                    <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt" value="<?php echo ($article['dtCreArt'])?>">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo ($article['libTitrArt'])?>">
                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt" value="<?php echo ($article['libChapoArt'])?>">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" value="<?php echo ($article['libAccrochArt'])?>">
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" class="form-control" type="text-area" name="parag1Art" value="<?php echo ($article['parag1Art'])?>">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo ($article['libSsTitr1Art'])?>">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" class="form-control" type="text-area" name="parag2Art" value="<?php echo ($article['parag2Art'])?>">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo ($article['libSsTitr2Art'])?>">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" class="form-control" type="text-area" name="parag3Art" value="<?php echo ($article['parag3Art'])?>">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt" value="<?php echo ($article['libConclArt'])?>">
                    <label for="urlPhotArt">Illustration</label>
                    <input id="urlPhotArt" class="form-control" type="file" name="urlPhotArt" value="<?php echo ($article['urlPhotArt'])?>" accept="image/png, image/jpeg">
                    <label for="numThem">Thématique</label>
                    <select id="numThem" class="form-control" type="text" name="numThem" value="<?php echo ($article['numThem'])?>">
                    <option value="">--Choisissez un thème--</option>
                    <option value="dog">Histoires et secrets</option>
                    <option value="cat">Lieux et monuments</option>
                    <option value="hamster">Actualités</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>