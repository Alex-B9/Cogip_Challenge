<?php

$pageTitle = 'Home page';
ob_get_clean();
?>

<h1>Home page</h1>
<p>Hello world !</p>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";