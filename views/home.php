<?php
$pageCSS = './../public/styles/pages/home/home.css';
$pageTitle = 'Home page'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";


?>
<div class="bg-color">
    <div class='container'>
    <div class="container-header">
        <div class="container-tilte">
        <h1 class="title-welcome">Bienvenue</h1> 
        <h1>à la COGIP</h1>
        <h2>Bonjour Jean-Christian !
        </br> Que souhaitez-vous faire aujourd’hui ?</h2>
        </div>
<img class="img-title" src="../public/assets/img/digital-nomad.png" alt="">
</div>

    

        <div class="button-container">
            <div class="touti">
                <a href="#"><img class="img-title" src="../public/assets/img/document-1.png" alt="button"></a>
                <a href="#">Nouvelle Facture</a>
            </div>
            <div class="touti">
                <a href="#"><img class="img-title" src="../public/assets/img/add-house-1.png" alt="button"></a>
                <a href="#">Nouvelle Société</a>
            </div>
            <div class="touti">
                <a href="#"><img class="img-title" src="../public/assets/img/user.png" alt="button"></a>
                <a href="#">Nouveau Contact</a>
            </div>


        </div>

   
        <div class='container-table'>
            <div class="all-table">
                <div class="titre-table">
                    <p>Dernier contact :</p>
                </div>
                
                    <table class="table">
                        <thead>
                        <th>Numéro facture</th>
                        <th>Date</th>
                        <th>Société</th>
                        <th></th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="facture-style">OFKZSODJOS1</td>
                            <td>00/00/01</td>
                            <td>societé1</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS2</td>
                            <td>00/00/02</td>
                            <td>societé2</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS3</td>
                            <td>00/00/03</td>
                            <td>societé3</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS4</td>
                            <td>00/00/04</td>
                            <td>societé4</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS5</td>
                            <td>00/00/05</td>
                            <td>societé5</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        </tbody>
                        <div>
                    </table>
                    
                    <div class="titre-table">
                    <p>Dernières factures :</p>
                </div>
                <table class="table">
                    <thead>
                    <th>Numéro facture</th>
                    <th>Date</th>
                    <th>Société</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="facture-style">OFKZSODJOS1</td>
                        <td>00/00/01</td>
                        <td>societé1</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS2</td>
                        <td>00/00/02</td>
                        <td>societé2</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS3</td>
                        <td>00/00/03</td>
                        <td>societé3</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS4</td>
                        <td>00/00/04</td>
                        <td>societé4</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS5</td>
                        <td>00/00/05</td>
                        <td>societé5</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    </tbody>
                </table>
         
                <div class="titre-table">
                    <p>Dernières Société :</p>
                </div>
            <table class="table">
                <thead>
                <th>Numéro facture</th>
                <th>Date</th>
                <th>Société</th>
                <th></th>
                </thead>
                <tbody>
                <tr>
                    <td class="facture-style">OFKZSODJOS1</td>
                    <td>00/00/01</td>
                    <td>societé1</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS2</td>
                    <td>00/00/02</td>
                    <td>societé2</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS3</td>
                    <td>00/00/03</td>
                    <td>societé3</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS4</td>
                    <td>00/00/04</td>
                    <td>societé4</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS5</td>
                    <td>00/00/05</td>
                    <td>societé5</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div> </div>
<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire