<?php
$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/connect/connect.css';

$pageTitle = 'Connect page';
ob_get_clean();
?>
<?php require "views/components/navigation.php"; ?>
    <h1>Bienvenue A LA COGIP</h1>
    <break>
    <p>Bienvenue dans l'espace de connexion de la COGIP</p>

    <form method="post" action="../../core/loginForm.php">
        <div class="field">
            <label class="label">Votre identifiant</label>
            <input class="input" type="text" name="user_email" placeholder="Enter your email" required aria-required=true aria-label="Enter your email">
        </div>

        <div class="field">
            <label class="label">Votre mot de passe</label>
            <input class="input" type="text" name="user_password" placeholder="Enter your password" required aria-required=true aria-label="Enter your password">
        </div>

            <a href="register">Pas encore inscrit ? Cliquez ici</a>

        <div class="control">
            <button type="submit" name="submit_login_form" class="button is-link" aria-required=true aria-label="Submit">SUBMIT</button>
        </div>

    </form>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";
