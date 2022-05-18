<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/details/details.css';
$pageTitle = 'Détails de la société'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Dashboard</h1>
</div>
<div class="usersContainer">
    <div class="userItem">
        <img src="../../public/assets/img/userUcon.png" alt="">
        <p id="userName">Jean-Christian Ranu</p>
        <div class="rights">
            <input type="checkbox" id="fullRights" name="fullRights" value="fullRights">
            <label for="fullRights">Accès complet</label>
        </div>
        <div class="rights">
            <input type="checkbox" id="addRights" name="addRights" value="addRights">
            <label for="addRights">Ajout uniquement</label>
        </div>
    </div>
</div>
<div class="saveBtn">
        <button><a href="/companies">Sauvegarder</a></button>
    </div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire