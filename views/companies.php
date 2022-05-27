<?php

use App\models\crud\ReadModel;

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Sociétés';
ob_start();
session_start();
?>

<?php require "views/components/navigation.php"; ?>

    <div class="titleContainer">
        <h1>COGIP</h1>
        <h2>Liste des sociétés</h2>
    </div>

<?php
if ($_SESSION['connected']) {
?>
    <div class="add">
        <a href="/company-new"><img src="./public/assets/img/add-house-1.png"> Nouvelle société</a>
    </div>
<?php } ?>
    <div class="tableContainer">
        <h3>Clients</h3>
        <div class="tableItem">
            <table>
                <thead>
                <tr>
                    <th>NOM</th>
                    <th>TVA</th>
                    <th>PAYS</th>
                    <?php
                    if ($_SESSION['connected']) {
                    ?>
                    <th></th>
                    <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php $getClientCompany = new ReadModel();
                foreach ($getClientCompany->getCompanyByIdType(1) as $item) { ?>
                    <tr>
                        <td><?= $item['company_name'] ?></td>
                        <td><?= $item['vat_number'] ?></td>
                        <td><?= $item['country'] ?></td>
                        <?php
                        if ($_SESSION['connected']) {
                        ?>
                            <td><img src="./public/assets/img/delete-2.png"></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="tableContainer">
        <h3>Fournisseurs</h3>
        <div class="tableItem">
            <table>
                <thead>
                <tr>
                    <th>NOM</th>
                    <th>TVA</th>
                    <th>PAYS</th>
                    <?php
                    if ($_SESSION['connected']) {
                    ?>
                        <th></th>
                    <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php $getClientCompany = new ReadModel();
                foreach ($getClientCompany->getCompanyByIdType(2) as $item) { ?>
                    <tr>
                        <td><?= $item['company_name'] ?></td>
                        <td><?= $item['vat_number'] ?></td>
                        <td><?= $item['country'] ?></td>
                        <?php
                        if ($_SESSION['connected']) {
                        ?>
                            <td><img src="./public/assets/img/delete-2.png"></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";