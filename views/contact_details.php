<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/details/details.css';
$pageTitle = 'Détails du contact'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

    <div class="titleContainer">
        <h1>Contact</h1>
        <h2 id="contactName"><?= $people->getLastname() . " " . $people->getFirstname() ?></h2>
    </div>
    <div class="detailsContainer">
        <div class="info">
            <p>Société : <span id="contactCompany"><?= $people->getCompany() ?></span></p>
            <p>Email : <span id="contactEmail"><?= $people->getEmail() ?></span></p>
            <p>Numéro de téléphone : <span id="contactPhone"><?= $people->getPhone() ?></span></p>
        </div>
        <div class="tableContainer">
            <h3>Factures liées au contact</h3>
            <table class="tableItem">
                <tr>
                    <th>Numéro de facture</th>
                    <th>Date</th>
                </tr>
                <?php foreach ($invoice->getInvoicesData() as $data) { ?>
                    <tr>
                        <td id="contactInvoiceNbr"><?= $data[0] ?></td>
                        <td id="contactInvoiceDate"><?= $data[1] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="backBtn">
            <button><a href="/contacts">Retour</a></button>
        </div>
    </div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire