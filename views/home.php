<?php
// optionnel :: $pageCSS = '../prout.css';
$pageTitle = 'Home page'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

    <h1>Home page</h1>
    <p>Hello world !</p>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire