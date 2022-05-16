<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/connect/connect.css';
$pageTitle = 'Connexion';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

    <h1>Bienvenue A LA COGIP</h1>
    <break>
        <p>Bienvenue dans l'espace de connexion de la COGIP</p>

        <div class="connect-container">
            <div class="img">
                <img src="./public/assets/img/data-security-1.png" alt="logo-security">
                <div>

                    <form class="form" method= "post" action="../../core/loginForm.php">
                        <div class="field">
                            <label class="label">Votre identifiant</label>
                            <input class="input" type="text" id="userEmail" name="userEmail" placeholder="Enter your email" required aria-required=true aria-label="Enter your email">
                        </div>

                        <div class="field">
                            <label class="label">Votre mot de passe</label>
                            <input class="input" type="text" id="userPassword" name="userPassword" placeholder="Enter your password" required aria-required=true aria-label="Enter your password">
                        </div>

                        <a href="register">Pas encore inscrit ? Cliquez ici</a>

                        <div class="control">
                            <button type="submit" name="Submit" aria-required=true aria-label="Submit">SUBMIT</button>
                        </div>
                    </form>
                </div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";

