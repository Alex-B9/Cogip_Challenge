<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Factures';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

<div class="bg-color">
<div class="container">
<div class="container-header">
<div class="titleContainer">
    <div>
    <h1>COGIP</h1>
    <p class="subtitle">Liste des factures</p>
    </div>
    <div class ="add">
     <a href="/company-new">
         <img src="./public/assets/img/add-1.png"> Nouvelle facture</a> 
</div>
</div>
<div class="container-img">
    <img class="img-facture" src="../public/assets/img/sales-team.png" alt="image company">
</div>

</div></div> 



<!-- <div class="titleContainer">
    <h1>COGIP</h1>
    <h2>Liste des factures</h2>
</div>

<div class ="add">
    <a href="/invoice-new"><img src="./public/assets/img/document-1.png"> Nouvelle Facture</a>
</div> -->

<div class="tableContainer">
    <table class="tableItem">
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
                <td id="invoiceNbr">F20190404-004</td>
                <td id="invoiceDate">04/04/2019</td>
                <td id="invoiceCompany">Jouet Jean-Michel</td>
                <td id="invoiceCompanyType">Fournisseur</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td id="invoiceNbr">F20190404-003</td>
                <td id="invoiceDate">04/04/2019</td>
                <td id="invoiceCompany">Dunder Mifflin</td>
                <td id="invoiceCompanyType">Client</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td id="invoiceNbr">F20190404-002</td>
                <td id="invoiceDate">04/04/2019</td>
                <td id="invoiceCompany">Pierre Cailloux</td>
                <td id="invoiceCompanyType">Fournisseur</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
        </tbody>
    </table>
</div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";