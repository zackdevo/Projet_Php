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
                </ul>
            </div>
        </nav>
        <section class="container mt-5 st">
            <div class="row justify-content-center">
                <div class="col-6 border border-dark bg-form py-2 rounded">
                    <h1 class="h3 text-dark text-center">Inscrivez-vous</h1>
                    <form autocomplete="off" action="../models/fonctions.php" method="POST">
                        <div class="form-group">
                            <label for="pseudo">Votre pseudo</label>
                            <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="xX-DarkNinja-Xx">
                        </div>
                        <div class="form-group">
                            <label for="password">Votre mot de passe</label>
                            <input type="password" class="form-control" id="password" aria-describedby="password">
                        </div>
                        <div class="form-group">
                            <label for="password2">Retaper votre mot de passe</label>
                            <input type="password" class="form-control" id="password2" aria-describedby="password2">
                        </div>
                        <button type="submit" class="btn btn-dark">S'inscrire</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>