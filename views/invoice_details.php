<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/details/details.css';
$pageTitle = 'Détails de la facture'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<h1>Invoice details</h1>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire