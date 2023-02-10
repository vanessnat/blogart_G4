<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Accueil</title>
</head>

<body style="background-color: #ECECEC">

<?php
include '../../header.php';

?>

    <section>
        <img src="/src/css/Accueil Image.png" class="img-fluid">
        <div class="bloc-intro">
            <div class="container">
                    <h2 class="col-mid-4 text-left">Insolit'Bordeaux</h2>
                    <h5 class="col-mid-4 text-left">Insolit'Bordeaux vous communique tout un tas d'histoires et de secrets autour de la ville de Bordeaux. Sur des lieux, monuments, comme célébrités ou expositions, nos articles rédigés par notre équipe veulent vous dévoiler les secrets les plus insolites et méconnus de notre chère Burdigala.</h4>
                </div>
            </div>
        </div>
    </section>


    <div class="categories-text">
        <h1>Nos catégories d'articles</h1>
    </div>
    <section class="categories">
        <div class="buttons">
            <a href="#" class="button-histsecrets">Histoire et secrets</a>
            <a href="#" class="button-lieuxmonuments">Lieux et monuments</a>
            <a href="#" class="button-actualites">Actualités</a>
        </div>
    </section>

    <div class="categories-text">
        <h1>Derniers articles</h1>
    </div>
    <section class="section-articles">
        <div class="container">
            <div class="card text-bg">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="/src/css/Alphonse bertillon.jpg" class="img-bertillon">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h5 class="card-title">La science à la poursuite du crime</h5>
                        <p class="card-text">Connaissez-vous le bertillonage ? Célèbre pour ses superbes rôles hollywoodiens, l'appareil en a plus d'un tour dans son boitier.</p>
                    </div>
                    <div class="mots-cles">
                        <div class="box-boutons">
                            <a class="btn btn-ref" href="#" role="button">Criminologie</a>
                            <a class="btn btn-ref" href="#" role="button">Exposition</a>
                            <a class="btn btn-ref" href="#" role="button">Bordeaux</a>
                        </div>
                    </div>
                    <div class="plus">
                        <div class="button-lire">
                            <a href="/views/backend/articles/list.php" class="lire-plus">En lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-articles">
        <div class="container">
            <div class="card text-bg">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="/src/css/Olivier delteil.png" class="img-bertillon">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h5 class="card-title">Bordeaux, une ville qui se vit et se visite</h5>
                        <p class="card-text">Un guide d'exeption pour une ville d'exeption. Aujourd'hui, on vous dresse le portrait d'Olivier Delteil, un homme où la vie rime avec passion.</p>
                    </div>
                    <div class="mots-cles">
                        <div class="button-box">
                            <a class="btn btn-ref" href="#" role="button">Guide</a>
                            <a class="btn btn-ref" href="#" role="button">Visite</a>
                            <a class="btn btn-ref" href="#" role="button">Bordeaux</a>
                        </div>
                    </div>
                    <div class="plus">
                    <div class="button-lire">
                            <a href="/views/backend/articles/list.php" class="lire-plus">En lire plus</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<?php
include '../../footer.php'; // contains the footer

?>