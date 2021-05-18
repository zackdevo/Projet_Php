<?php

include('header.php');
?>
<section class="container mt-5 st">
    <div class="row justify-content-center">
        <div class="col-6 border border-dark bg-form py-2 rounded">
            <h1 class="h3 text-dark text-center">Donnez votre avis !</h1>
            <form id="createForm" autocomplete="off" action="/?action=new" method="POST">
                <div class="form-group">
                    <label for="title">Nom du jeu</label>
                    <input name="title" type="text" class="form-control" id="title" aria-describedby="title" placeholder="The Last Of Us, Knack 2, Farming Simulator" required="">
                </div>
                <div class="form-group">
                    <label for="password">Titre de la review</label>
                    <input name="subtitle" type="text" class="form-control" id="subtitle" aria-describedby="subtitle" required="">
                </div>
                <div class="form-group">
                    <label for="content">Eh ça rédige la review</label>
                    <textarea name="content" class="form-control" id="content" rows="3" required=""></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Créer</button>
            </form>
            <div class="row justify-content-center">
                <?php
                if (isset($errorMsgReview)) {
                    echo "<p class='alert alert-warning'>$errorMsgReview</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
</main>
</body>

</html>