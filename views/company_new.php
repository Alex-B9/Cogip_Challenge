<?php
session_start();

use App\controllers\Request;
use App\models\crud\ReadModel;

$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/new/new.css';
$pageTitle = 'Ajouter une société'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

    <div class="titleContainer">
        <h1>Ajout</h1>
        <h2>Nouvelle société</h2>
    </div>
    <div class="addContainer">
        <div class="addImg"><img src="../public/assets/img/leader.png" alt=""></div>
        <form action="/company-store" method="post" class="addForm">
            <div class="formItem">
                <label for="companyName">Nom de la société</label>
                <input type="text" id="companyName" name="companyName">
                <?php
                    if (isset(Request::get()['submit'])){
                        if (isset($_SESSION['dataCompany']['name'])){
                            echo $_SESSION['companyError']['errName'];
                        }
                    }
                ?>
            </div>
            <div class="formItem">
                <label for="companyTVA">Numéro de TVA</label>
                <input type="text" id="companyTVA" name="companyTVA">
                <?php
                if (isset(Request::get()['submit'])){
                    if (isset($_SESSION['dataCompany']['vat'])){
                        echo $_SESSION['companyError']['errVat'];
                    }
                }
                ?>
            </div>
            <div class="formItem">
                <label for="companyCountry">Pays de la société</label>
                <input type="text" id="companyCountry" name="companyCountry">
                <?php
                if (isset(Request::get()['submit'])){
                    if (isset($_SESSION['dataCompany']['country'])){
                        echo $_SESSION['companyError']['errCountry'];
                    }
                }
                ?>
            </div>
            <div class="formItem">
                <label for="companyType">Type de société</label>
                <select name="companyType" id="companyType">
                    <?php $companyType = new ReadModel();

                    foreach ($companyType->getAllCompanyType() as $item) { ?>
                        <option value=<?= $item['Id_Type'] ?>><?= $item['Type'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formItem">
                <input type="submit" name="submit" value="Ajouter">
            </div>
        </form>
    </div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire
