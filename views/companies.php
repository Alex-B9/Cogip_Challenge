<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Sociétés';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>


<div class="bg-color">
<div class="container">
<div class="container-header">
<div class="titleContainer">
    <div>
    <h1>COGIP</h1>
    <p class="subtitle">Liste des sociétés</p>
    </div>
    <div class ="add">
     <a href="/company-new">
         <img src="./public/assets/img/add-1.png"> Nouvelle société</a> 
</div>
</div>
<div class="container-img">
    <img class="img-companie" src="../public/assets/img/leader.png" alt="image company">
</div>

</div></div> 



<div class="tableContainer">
    <h3>Clients</h3>
    <div class="tableItem">
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
                    <td id="companyName"><a class="linkToDetails" href="/company-details">Raviga</a></td>
                    <td id="companyNbr">US456 654 342</td>
                    <td id="companyCountry">United States</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
                <tr>
                    <td id="companyName"><a class="linkToDetails" href="/company-details">Dunder Mifflin</a></td>
                    <td id="companyNbr">US678 765 765</td>
                    <td id="companyCountry">United States</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
                <tr>
                    <td id="companyName"><a class="linkToDetails" href="/company-details">Jouets Jean-Michel</a></td>
                    <td id="companyNbr">FR 677 544 000</td>
                    <td id="companyCountry">France</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
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
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a class="linkToDetails" href="/company-details">Belgalol</a></td>
                    <td>BE0876 654 665</td>
                    <td>Belgique</td>
                    <td><img src="./public/assets/img/delete-2.png"></a></td>
                </tr>
                <tr>
                    <td><a class="linkToDetails" href="/company-details">Pierre Cailloux</a></td>
                    <td>FR 678 908 654</td>
                    <td>France</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
                <tr>
                    <td><a class="linkToDetails" href="/company-details">Proximdr</a></td>
                    <td>BE0876 985 665</td>
                    <td>Belgique</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";