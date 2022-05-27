<?php

use App\models\crud\ReadModel;

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Contacts';
ob_start();
session_start();
?>

<?php require "views/components/navigation.php"; ?>

    <div class="titleContainer">
        <h1>COGIP</h1>
        <h2>Liste des contacts</h2>
    </div>

<?php
if ($_SESSION['connected']) {
?>
    <div class="add">
        <a href="/contact-new"><img src="./public/assets/img/user.png"> Nouveau contact</a>
    </div>
<?php } ?>

    <div class="tableContainer">
        <div class="tableItem">
            <table>
                <thead>
                <tr>
                    <th>NOM</th>
                    <th>TELEPHONE</th>
                    <th>E-MAIL</th>
                    <th>SOCIETE</th>
                    <?php
                    if ($_SESSION['connected']) {
                    ?>
                    <th></th>
                        <?php } ?>
                </tr>
                </thead>
                <tbody>
                <?php $getPeople = new ReadModel();

                foreach ($getPeople->getAllPeople() as $item) { ?>
                    <tr>
                        <td id="contactName">
                            <a href=/contact-details/<?= $item['Id_People'] ?>>
                                <?= $item['lastname'] . $item['firstname'] ?>
                            </a>
                        </td>
                        <td id="contactPhone"><?= $item['Phone'] ?></td>
                        <td id="contactEmail"><?= $item['email'] ?></td>
                        <td id="contactCompany"><?= $item['company_name'] ?></td>
                        <?php
                            if ($_SESSION['connected']) { ?>
                                <td>
                                    <a href="#">
                                        <img src="./public/assets/img/delete-2.png">
                                    </a>
                                </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";