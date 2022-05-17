<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/details/details.css';
$pageTitle = 'Détails du contact'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<h1>Contact details</h1>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire