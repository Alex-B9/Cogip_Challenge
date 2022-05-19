<?php
$pageCSS = './../public/styles/pages/home/home.css';
$pageTitle = 'Home page'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

    <h1>Bienvenue à la COGIP</h1>
    <h2>Bonjour !</h2>
    <table class="table">
        <thead>
            <th>Numéro Facture</th>
            <th>Date</th>
            <th>Société</th>
            <th>#</th>
             </thead>
        <tbody>
            <?php
                foreach($data as $produit){ ?>
                    <tr>
                <td> <?= $produit['#Numfacture'] ?> </td>
                <td> <?= $produit['#date'] ?> </td>
                <td> <?= $produit['#société'] ?> </td>
                <td> <?= $produit['#supprimé'] ?> </td>
                
                
            <?php 
                    } 
            ?>
    
                    </tr>
        </tbody>
    </table>
    






<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire