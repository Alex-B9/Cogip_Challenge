<?php
$pageCSS = './../public/styles/pages/contactNew.css';
$pageTitle = 'Ajouter contact'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

    <h1>Bienvenue à la COGIP</h1>
    <h2>Bonjour !</h2>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire
