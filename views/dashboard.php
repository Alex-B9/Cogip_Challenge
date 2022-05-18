<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/dashboard/dashboard.css';
$pageTitle = 'Dashboard'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Dashboard</h1>
</div>
<div class="usersContainer">
    <div class="userItem">
        <div class="userImg">
            <img src="../../public/assets/img/userIcon.png" alt="">
        </div>
        <div class="userName">
            <p id="userName">Jean-Christian Ranu</p>
        </div>
        <div class="userRights">      
            <label for="fullRights" id="fullRightsLabel">
                <input type="checkbox" id="fullRights" class="checkbox" name="fullRights" value="fullRights" onchange="checkChange()">      
            Accès complet</label>
        </div>
        <div class="userRights">
            <label for="addRights" id="addRightsLabel">
                <input type="checkbox" id="addRights"  class="checkbox"name="addRights" value="addRights" onchange="checkChange()">
            Ajout uniquement</label>
        </div>
        </div>
    </div>
</div>
<div class="usersContainer">
    <div class="userItem">
        <div class="userImg">
            <img src="../../public/assets/img/userIcon.png" alt="">
        </div>
        <div class="userName">
            <p id="userName">Muriel Perrache</p>
        </div>
        <div class="userRights">        
            <label for="fullRights" id="fullRightsLabel">
                <input type="checkbox" id="fullRights" class="checkbox" name="fullRights" value="fullRights" onchange="checkChange()">    
            Accès complet</label>
        </div>
        <div class="userRights">
            <label for="addRights" id="addRightsLabel">
                <input type="checkbox" id="addRights"  class="checkbox"name="addRights" value="addRights" onchange="checkChange()">    
            Ajout uniquement</label>
        </div>
        </div>
    </div>
</div>
<div class="saveBtn">
        <button><a href="/companies">Sauvegarder</a></button>
</div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire
