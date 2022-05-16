<?php

$pageTitle = 'Home page';
ob_start();
?>

    <h1>Register account</h1>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";
