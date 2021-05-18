<?php
include("../templates/header.php");
?>
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
    <div class="row px-3 mb-4 justify-content-center">
        <?php
        foreach ($items as $oneItem) {
        ?>
            <div class="card col-5 mb-3 mr-3">
                <div class="card-body">
                    <h5 class="card-title"> <?= $oneItem->title ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <?= $oneItem->subtitle ?> </h6>
                    <p class="card-text"> <?= $oneItem->content ?> </p>
                    <p class="user_name card-text">@<?= $oneItem->user->nickname ?></p>
                    <a href="#" class="card-link">Voir la review complète</a> <br>
                    <a href="#" class="card-link">Voir toutes les reviews de cet utilistateur</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</section>
<section class="container my-5">
    <div class="row ">

    </div>
</section>
</main>
</body>

</html>