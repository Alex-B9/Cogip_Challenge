<?php

$pageTitle = 'Home page';
ob_get_clean();
?>
    <?php require "views/components/navigation.php" ?>

    <h1>404 not found</h1>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";