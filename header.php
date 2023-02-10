<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Art</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>
<body>

<header>
        <nav class="navbar navbar-expand-lg" style="background-color: #093D4D; ">
            <div class="container">
            <a class="navbar-brand" href="/views/frontend/Accueil.html">
                <img src="/src/css/Logo 2.jpg" alt="logo" width="85" height="84">
            </a>
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#" >Histoires et secrets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#" >Lieux et monuments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#" >Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/views/backend/register.php" >	<?php 
                        if (!isset($_SESSION['numMemb'])){ 
                            echo ("S'inscrire");
                        }
                            ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/views/backend/login.php" ><?php 
                        if (!isset($_SESSION['numMemb'])){ 
                            echo ("Se connecter");
                        }
                            ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/views/backend/dashboard.php"><?php 
                        if (isset($_SESSION['numMemb'])){ 
                            echo ("Mon compte");
                        }else{
                            echo "";
                        }
                            ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#" >Eng | Fr</a>
                    </li>
                </ul>
            </div>
        </nav>
</header>


