<?php
session_start();

?>
<header>
    <nav class='navbarContainer'>
        <a href="./"><img src="../../public/assets/img/Logo.png" alt="logo"></a>
        <div class='linksContainer'>
            <ul>
                <li><a href='/'>Accueil</a></li>
                <li><a href='/invoices'>Factures</a></li>
                <li><a href='/companies'>Sociétés</a></li>
                <li><a href='/contacts'>Contacts</a></li>
                <?php
                if (!$_SESSION['connected']) {
                ?>
                <li><a href='/connect'>Connexion</a></li>
                <?php } ?>
                <?php
                if ($_SESSION['connected']) {
                ?>
                <li><a href="/disconnect">Déconnexion</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>
