<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project PHP</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- CSS PERSO -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <main>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-light" href="#">Gaming Shareview</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="mainPage.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Toutes les reviews</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 mr-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                    <button id="search-btn" class="btn btn-outline-success my-2 my-sm-0 text-light" type="submit">Rechercher</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="register.php">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="carouselExampleControls" class="carousel slide mb-3 d-flex align-items-center" data-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active first-car">
                    <h1 class="text-center text-light">Partagez vos reviews sur tous les jeux vidéos !</h1>
                </div>
                <div class="carousel-item second-car">
                    <h2 class="h1 text-center text-light">Echangez avec la communauté sous vos postes !</h2>
                </div>
                <div class="carousel-item third-car">
                    <h2 class="h1 text-center text-light">Notez la qualité de la review !</h2>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>

        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="h2 display-4 text-light text-center mb-3">Dernières reviews</h2>
                </div>
            </div>
            <div class="row px-3 mb-4">
                <div class="card col-5 ">
                    <div class="card-body">
                        <h5 class="card-title">The Last Of Us 2</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Le pire jeu de l'histoire</h6>
                        <p class="card-text">Bonjour à tous, voici ma review du jeu The Last Of Us 2 ...</p>
                        <p class="user_name card-text">@darkioz</p>
                        <a href="#" class="card-link">Voir la review complète</a> <br>
                        <a href="#" class="card-link">Voir toutes les reviews de cet utilistateur</a>
                    </div>
                </div>
                <div class="card col-5 offset-2">
                    <div class="card-body">
                        <h5 class="card-title">Halo 5</h5>
                        <h6 class="card-subtitle mb-2 text-muted">La fin d'une saga culte ?</h6>
                        <p class="card-text">Salut tous le monde, aujourd'hui je parle d'une saga culte ...</p>

                        <p class="user_name card-text">@robertodu13</p>
                        <a href="#" class="card-link">Voir la review complète</a> <br>
                        <a href="#" class="card-link">Voir toutes les reviews de cet utilistateur</a>
                    </div>
                </div>
            </div>
            <div class="row px-3 mb-4">
                <div class="card col-5">
                    <div class="card-body">
                        <h5 class="card-title">Death Stranding</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Le délire Kojima de trop</h6>
                        <p class="card-text">Kojima, le génie connut pour la saga Metal Gear Solid ...</p>
                        <p class="user_name card-text">@jujudevil</p>
                        <a href="#" class="card-link">Voir la review complète</a> <br>
                        <a href="#" class="card-link">Voir toutes les reviews de cet utilistateur</a>
                    </div>
                </div>
                <div class="card col-5 offset-2">
                    <div class="card-body">
                        <h5 class="card-title">Dark Souls 3</h5>
                        <h6 class="card-subtitle mb-2 text-muted">ce jeu n'es pas fun</h6>
                        <p class="card-text">Le jeu est tro dur je compren pas pk les gens aime</p>
                        <p class="user_name card-text">@kilobi</p>
                        <a href="#" class="card-link">Voir la review complète</a> <br>
                        <a href="#" class="card-link">Voir toutes les reviews de cet utilistateur</a>
                    </div>
                </div>
            </div>

        </section>
        <section class="container my-5">
            <div class="row ">
                <!-- CONTENU DEPUIS LA BASE DE DONNES -->
                <?php
                include_once('../models/PostManager.php');
                ?>
            </div>
        </section>
    </main>
</body>

</html>