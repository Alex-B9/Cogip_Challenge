<?php
session_start();

use App\controllers\Request;
use App\controllers\ValidateData;
use App\controllers\ContactController;
use App\models\crud\ReadModel;
use App\models\ErrorMessage;

$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/new/new.css';
$pageTitle = 'Ajouter contact'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>
    <div class="titleContainer">
        <h1>Ajout</h1>
        <h2>Nouveau contact</h2>
    </div>
    <div class="addContainer">
        <div class="addImg"><img src="../public/assets/img/email.png" alt="" id="contactNewImg"></div>
        <form class="addForm" action="/contact-store" method="post">
            <div class="formItem">
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname">
                <?php   $error = new ErrorMessage();
                        $validate = new ValidateData();
                        $contact = new ContactController();
//                        $lastname = $validate->nameIsValid(Request::get()['lastname']);
//                        echo $_SESSION['contactError']['errLastname'];
                        if (isset($_SESSION['dataContact']['lastname'])){
//                            $contact->create();
                            echo $_SESSION['contactError']['errLastname'];
//                            echo "coucou";
                        }
//                        $lname = Request::session()[$validate->nameIsValid(Request::get()['lastname'])];
//                        if (empty($lname))
//                        {
//                            echo $error->lastnameError();
//                        }
//                        if (isset(Request::get()['submit'])){
//                            if (!$_SESSION['lastname']){
//                                echo $error->firstnameError();
//                            }
//                       if (!$validate->nameIsValid(Request::get()['lastname']))
//                       {
//                           echo $error->firstnameError();
//                       }
//                        }?>
            </div>
            <div class="formItem">
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname">
            </div>
            <div class="formItem">
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div class="formItem">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="formItem">
                <label for="company">Société</label>
                <select name="company" id="company">
                    <?php $companyName = new ReadModel();

                    foreach ($companyName->getAllCompany() as $item) { ?>
                        <option value=<?= $item['CompaniesId'] ?>><?= $item['company_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formItem">
                <input type="submit" name="submit"
                       value="Ajouter">
            </div>
        </form>
    </div>
<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire
