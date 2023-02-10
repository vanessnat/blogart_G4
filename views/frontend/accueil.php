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
                        <div class="button-mot">
                            <a href="#" class="btn" role="button" data-bs-toggle="button">criminologie</a>
                            <a href="#" class="btn" role="button" data-bs-toggle="button">exposition</a>
                            <a href="#" class="btn" role="button" data-bs-toggle="button">bordeaux</a>
                        </div>
                    </div>
                    <div class="plus">
                        <div class="button-lire">
                            <a href="#" class="lire-plus">En lire plus</a>
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
                        <div class="box-boutons">
                            <a href="#" class="button-mot" class="guide">Guide</a>
                            <a href="#" class="button-mot" class="visite">Visite</a>
                            <a href="#" class="button-mot" class="bordeaux">Bordeaux</a>
                        </div>
                    </div>
                    <div class="plus">
                        <div class="button-lire">
                            <a href="#" class="lire-plus">En lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="text-center">
        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11313.04051376454!2d-0.5849997921874824!3d44.8569989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5528763e4a8959%3A0x6a0782a140a43f2c!2sArchives%20d%C3%A9partementales%20de%20la%20Gironde!5e0!3m2!1sfr!2sfr!4v1675871240064!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

</body>

<?php
include '../../footer.php'; // contains the footer

?>