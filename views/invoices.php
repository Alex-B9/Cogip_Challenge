<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Factures';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

<h1>COGIP: Liste des factures</h1>

<div class ="add"><a href="invoice_new.php"><img src="./public/assets/img/document-1.png"> Nouvelle Facture</a></div>

<div class="table">
    <table>
        <thead>
            <tr>
                <th>NUMERO DE FACTURE</th>
                <th>DATES</th>
                <th>SOCIETE</th>
                <th>TYPE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>F20190404-004</td>
                <td>04/04/2019</td>
                <td>Jouet Jean-Michel</td>
                <td>Fournisseur</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>F20190404-003</td>
                <td>04/04/2019</td>
                <td>Dunder Mifflin</td>
                <td>Client</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>F20190404-002</td>
                <td>04/04/2019</td>
                <td>Pierre Cailloux</td>
                <td>Fournisseur</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
        </tbody>
    </table>
</div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";