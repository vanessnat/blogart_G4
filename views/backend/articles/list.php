<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$articles = sql_select("article", "*");
?>

<Body style="background-color: #ECECEC">
<link rel="stylesheet" href="/src/css/style.css">
<img src="/src/css/Accueil Image.png" class="img-fluid">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="bloc-article2">
                <h1 class="choix-arttext">Articles</h1>
            </div>
            <tbody>
                <section class="section-articles-card">
                    <?php foreach ($articles as $article) { ?>
                        <div class="card-articles">
                            <div class="card-article1">
                                <div class="row align-items-center">
                                    <div class="texts">
                                        <div class="titre-art">
                                            <?php echo $article['libTitrArt']; ?>
                                        </div>
                                        <div class="chapo-art">
                                            <?php echo $article['libChapoArt']; ?>
                                        </div>
                                        <div class="date-art">
                                            <?php echo $article['dtCreArt']; ?>
                                        </div>
                                        <div class="mots-art">
                                            <?php echo $article['numThem']; ?>
                                        </div>
                                        <div class="but-art">
                                            <a href="update.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-edit">Modifier</a>
                                            <a href="delete.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-d">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
                <section>
                    <div class="create-articles">
                        <a href="create.php" class="btn btn-success">Créer un article</a>
                    </div>
                </section>
            </tbody>
        </div>
    </div>
</div>

<?php
include '../../../footer.php'; // contains the footer

?>