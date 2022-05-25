<header>
<div class="container">
    <nav class='navbarContainer'>
        <div class="img-container">
        <a href="./">
            <img src="../../public/assets/img/logo5.png" alt="logo">
        </a>
        </div>
        <div class='linksContainer'>
            <ul class='mainMenu'>
                <li class='mainMenuItem'><a href='/'>Accueil</a></li>
                <li class='mainMenuItem'><a href='/invoices'>Factures</a></li>
                <li class='mainMenuItem'><a href='/companies'>Sociétés</a></li>
                <li class='mainMenuItem'><a href='/contacts'>Contacts</a></li>

                <?php if(isset($_SESSION['Username'])): ?>
                    <li class='adminMenu'><a href='#'><?php echo 'Admin'; ?></a>
                        <div class='adminMenuContent'>
                                <a href="/dashboard"><?php echo 'Dashboard'; ?></a>
                                <a href="/invoice-new"><?php echo 'Ajouter une facture'; ?></a>
                                <a href="/company-new"><?php echo 'Ajouter une société'; ?></a>
                                <a href="/contact-new"><?php echo 'Ajouter un contact'; ?></a>
                        </div>
                    </li>
                <?php else:?>
                    <li class='connexionItem'><a href='/connect'><?php echo 'Connexion'; ?></a></li>
                <?php endif;?>

            </ul>
        </div>
    </nav>
</div>
</header>