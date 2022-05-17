<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/details/details.css';
$pageTitle = 'Détails du contact'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Contact</h1>
    <h2 id="contactName">Nom du contact</h2>
</div>
<div class="detailsContainer">
    <div class="contactInfo">
        <p>Société : <span id="contactCompany">nom de la société</span></p>
        <p>Email : <span id="contactEmail">email du contact</span></p>
        <p>Numéro de téléphone : <span id="contactPhone">numéro de téléphone du contact</span></p>
    </div>
    <div class="contactInvoices">
        <h3>Factures liées au contact</h3>
        <table class="contactInvoicesTable">
            <tr>
                <th>Numéro de facture</th>
                <th>Date</th>
            </tr>
            <tr>
                <td id="contactInvoiceNbr">123456789</td>
                <td id="contactInvoiceDate">17/05/2022</td>
            </tr>
            <tr>
                <td id="contactInvoiceNbr">123456789</td>
                <td id="contactInvoiceDate">18/05/2022</td>
            </tr>
        </table>
    </div>
</div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire