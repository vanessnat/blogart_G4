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

<?php
//load config
require_once 'config.php';

//load php scripts
?>

<body>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12">
                <img class="logo-footer" src="/src/css/Logo 2.jpg">
            </div>
            <div class="col-lg-3 col-12">
                <ul class="list-footer">
                    <li>
                        <a href="#" class="lien-footer">Tous nos articles</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">Histoires et secrets</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">Lieux et monuments</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">Actualités</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">Contact</a> 
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-12">
                <ul class="list-footer">
                    <li>
                        <a href="#" class="lien-footer">À propos</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">Compte</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">Se connecter</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">S'inscrire</a>
                    </li>
                    <li>
                        <a href="#" class="lien-footer">Mentions légales</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-2">
                <form>
                    <h5 class="questions-text">Des questions ?</h5>
                    <div class="row">
                        <div class="form-group inline">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nom">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <div class="formulaire">
                            <a href="#" class="button-formulaire">Soumettre</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
</body>
</html>