<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Art</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="src/css/style.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BlogArt</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      <a class="btn btn-primary m-1" href="/views/backend/login.php" role="button">Login</a>
      <a class="btn btn-dark m-1" href="/views/backend/register.php" role="button">Register</a>
      <a class="btn btn-primary m-1" href="/views/backend/login.php" role="button">Mon compte</a>
    </div>
  </div>
</nav>


<nav class="navbar navbar-expand-lg" style="background-color: #093D4D; ">
    <div class="container">
      <a class="navbar-brand" href="/views/frontend/accueil.html">
        <img src="/src/css/Logo 2.jpg" alt="logo" width="85" height="84">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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
            <a class="nav-link active text-white" aria-current="page" href="/views/backend/register.php" >S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/views/backend/login.php" >Se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#" >Eng | Fr</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
</header>

