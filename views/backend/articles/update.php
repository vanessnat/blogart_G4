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


<Body style="background-color: #ECECEC">
<link rel="stylesheet" href="/src/css/style.css">
<img src="/src/css/Accueil Image.png" class="img-fluid">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="bloc-article3">
                <h1 class="choix-arttext">Modifier l'article</h1>
            </div>
        </div>
    </div>
    <tbody>
        <section>
            <div class="col-md-12">
                <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
                    <div class="form-groupedit">
                        <input id="numArt" class="form-control" type="text" style="display: none" name="numArt" value="<?php echo ($article['numArt'])?>">
                        <label for="dtCreArt">Date</label>
                        <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt" value="<?php echo ($article['dtCreArt'])?>">
                        <label for="libTitrArt">Titre</label>
                        <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo ($article['libTitrArt'])?>">
                        <label for="libChapoArt">Chapô</label>
                        <input id="libChapoArt" class="form-control" type="text" name="libChapoArt" value="<?php echo ($article['libChapoArt'])?>">
                        <label for="libAccrochArt">Accroche</label>
                        <div class="update-para1">
                            <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" value="<?php echo ($article['libAccrochArt'])?>">
                            <label for="parag1Art">Paragraphe 1</label>
                            </div>
                        <div class="para-textarea">
                            <textarea id="story" name="story" rows="5" cols="80">
                                <?php echo ($article['parag1Art'])?>
                            </textarea>
                        </div>
                        <label for="libSsTitr1Art">Sous-titre 1</label>
                        <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo ($article['libSsTitr1Art'])?>">
                        <div class="udpate-para2">
                            <label for="parag2Art">Paragraphe 2</label>
                        </div>
                        <div class="para-textarea">
                            <textarea id="story" name="story"rows="5" cols="80">
                                <?php echo ($article['parag2Art'])?>
                            </textarea>
                        </div>
                        <label for="libSsTitr2Art">Sous-titre 2</label>
                        <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo ($article['libSsTitr2Art'])?>">
                        <div class="update-para3>
                            <label for="parag3Art">Paragraphe 3</label>
                        </div>
                        <div class="para-textarea">
                            <textarea id="story" name="story"rows="5" cols="80">
                                <?php echo ($article['parag3Art'])?>
                            </textarea>
                        </div>
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
                </form>
            </div>
        </section>
        <section>
            <div class="create-articles">
                <button type="submit" class="btn btn-update">Mettre à jour</a>
            </div>
        </section>
    </tbody>
</div>

<?php
include '../../../footer.php'; // contains the footer

?>