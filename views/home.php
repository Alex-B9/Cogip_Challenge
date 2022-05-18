<?php
$pageCSS = './../public/styles/pages/home/home.css';
$pageTitle = 'Home page'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";


?>


    <h1>Bienvenue à la COGIP</h1>
    <h2>Bonjour !</h2>

    <p>Dernières factures</p>
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

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire