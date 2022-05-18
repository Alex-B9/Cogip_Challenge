<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Companies';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

<h1>COGIP: Annuaire des sociétés</h1>

<div class ="add"><a href="company_new.php"><img src="./public/assets/img/add-house-1.png"> Nouvelle société</a></div>

<h2>Clients</h2>

<div class="table">
    <table>
        <thead>
            <tr>
                <th>NOM</th>
                <th>TVA</th>
                <th>PAYS</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Raviga</td>
                <td>US456 654 342</td>
                <td>United States</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>Dunder Mifflin</td>
                <td>US678 765 765</td>
                <td>United States</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>Jouets Jean-Michel</td>
                <td>FR 677 544 000</td>
                <td>France</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
        </tbody>
    </table>
</div>


<h2>Fournisseurs</h2>

<div class="table">
    <table>
        <thead>
            <tr>
                <th>NOM</th>
                <th>TVA</th>
                <th>PAYS</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Belgalol</td>
                <td>BE0876 654 665</td>
                <td>Belgique</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>Pierre Cailloux</td>
                <td>FR 678 908 654</td>
                <td>France</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>Proximdr</td>
                <td>BE0876 985 665</td>
                <td>Belgique</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
        </tbody>
    </table>
</div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";