<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Contacts';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

<h1>COGIP: Annuaire des contacts</h1>

<div class ="add"><a href="contact_new.php"><img src="./public/assets/img/user.png"> Nouveau contacte</a></div>


<div class="table">
    <table>
        <thead>
            <tr>
                <th>NOM</th>
                <th>TELEPHONE</th>
                <th>E-MAIL</th>
                <th>SOCIETE</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Peter Gregory</td>
                <td>555-4567</td>
                <td>peter.gregory@raviga.com</td>
                <td>Raviga</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>Cameron Howe</td>
                <td>555-7896</td>
                <td>cam.howe@mutiny.net</td>
                <td>Mutiny</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
            <tr>
                <td>Dwight Schrute</td>
                <td>555-9859</td>
                <td>dwight.schrute@ddmfl.com</td>
                <td>Dunder Mifflin</td>
                <td><img src="./public/assets/img/delete-2.png"></td>
            </tr>
        </tbody>
    </table>
</div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";