<?php

$pageTitle = 'Home page';
ob_get_clean();
?>

    <h1>Connect</h1>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";
