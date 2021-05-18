<?php include('header.php') ?>
<section class="container mt-5 st">
    <div class="row justify-content-center">
        <div class="col-6 border border-dark bg-form py-2 rounded">
            <h1 class="h3 text-dark text-center">Connectez-vous</h1>
            <form autocomplete="off" action="/?action=login" method="POST">
                <div class="form-group">
                    <label for="pseudo">Votre pseudo</label>
                    <input name="pseudo" type="text" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="xX-DarkNinja-Xx" required="">
                </div>
                <div class=" form-group">
                    <label for="password">Votre mot de passe</label>
                    <input name="password" type="password" class="form-control" id="password" aria-describedby="password" required="">
                </div>
                <button type="submit" class="btn btn-dark">Se connecter</button>
            </form>
            <div class="row justify-content-center">
                <?php
                if (isset($errorMsgLog)) {
                    echo "<p class='alert alert-warning'>$errorMsgLog</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
</main>
</body>

</html>