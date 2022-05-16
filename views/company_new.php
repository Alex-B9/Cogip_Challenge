<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/companyNew/companyNew.css';
$pageTitle = 'Ajouter société'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Ajout</h1>
    <h2>Nouvelle société</h2>
</div>
<div class="addContainer">
    <div class="addImg"></div>
    <form action="" class="addForm">
        <div class="formItem">
            <label for="name">Nom de la société</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="formItem">
            <label for="tva">Numéro de TVA</label>
            <input type="text" id="tva" name="tva">
        </div>
        <div class="formItem">
            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone">
        </div>
        <div class="formItem">
                <label for="companyType">Type de société</label>
                <select name="companyType" id="companyType">
                    <option>Type 1</option>
                    <option>Type 2</option>
                </select>
        </div>
        <div class="formItem">
                <button type="submit" value="submit">Ajouter</button>
        </div>
    </form>
</div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire