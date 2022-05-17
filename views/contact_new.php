<?php
<<<<<<< HEAD
$pageCSS = './../public/styles/pages/contactNew.css';
$pageTitle = 'Ajouter contact'; // obligatoire
=======
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/new/new.css';
$pageTitle = 'Ajouter un contact'; // obligatoire
>>>>>>> 8a5497a7af6ae3e966759ba3b73828760a28d89d
ob_start(); // obligatoire

require "views/components/navigation.php";

?>
<<<<<<< HEAD

    <h1>Bienvenue à la COGIP</h1>
    <h2>Bonjour !</h2>
=======
    <div class="titleContainer">
        <h1>Ajout</h1>
        <h2>Nouveau contact</h2>
    </div>
    <div class="addContainer">
        <div class="addImg"><img src="../../public/assets/img/email.png" alt="" id="contactNewImg"></div>
        <form class="addForm" action="">
            <div class="formItem">
                <label for="lastname">Prénom</label>
                <input type="text" id="lastname" name="lastname">
            </div>
            <div class="formItem">
                <label for="firstname">Nom</label>
                <input type="text" id="firstname" name="firstname">
            </div>
            <div class="formItem">
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div class="formItem">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="formItem">
                <label for="company">Société</label>
                <select name="company" id="company">
                    <option>Société 1</option>
                    <option>Société 2</option>
                    <option>Société 3</option>
                </select>
            </div>
            <div class="formItem">
                <button type="submit" value="submit">Ajouter</button>
            </div>
        </form>
    </div>
>>>>>>> 8a5497a7af6ae3e966759ba3b73828760a28d89d

<?php

$pageContent = ob_get_clean(); // obligatoire
<<<<<<< HEAD
require "layouts/layout.php"; // obligatoire
=======
require "layouts/layout.php"; // obligatoire
>>>>>>> 8a5497a7af6ae3e966759ba3b73828760a28d89d
