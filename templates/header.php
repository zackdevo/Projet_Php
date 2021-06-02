<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project PHP</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- CSS PERSO -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <main>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-light" href="/display">Gaming Shareview</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="/display">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Toutes les reviews</a>
                    </li>
                </ul>
                <form method="get" class="form-inline my-2 my-lg-0 mr-auto">
                    <input name="search" class="form-control mr-sm-2" id="search" type="search" placeholder="Rechercher" aria-label="Rechercher">
                    <button id="search-btn" class="btn btn-outline-success my-2 my-sm-0 text-light" type="submit">Rechercher</button>
                </form>
                <ul class="navbar-nav">
                    <?php
                    if (!isset($_SESSION['user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/login">Se connecter</a>
                        </li>
                    <?php
                    } else { ?>
                        <li class="nav-item">
                            <p style="margin: 0;" class=" nav-link text-light">Eh salut <?= $_SESSION['user']->nickname ?> ça va ou quoi ? </p>
                        </li>
                        <li class="nav-item">
                            <a href="/new"> <button id="create-btn" class="btn btn-outline-success my-2 my-sm-0 text-light"> Rédiger une review !</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" action="/logout" href="/logout">Se déconnecter</a>
                        </li>

                    <?php
                    }
                    if (!isset($_SESSION['user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" action="/register" href="/register">S'inscrire</a>
                        </li>
                    <?php
                    } ?>
                </ul>
            </div>
        </nav>