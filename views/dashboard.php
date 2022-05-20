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
        <form class="userRights" id="userRights"> 
            <input type="radio" id="fullRights" class="radio" name="rights" value="fullRights" checked>
            <label for="fullRights">Accès complet</label><br>
            <input type="radio" id="addRights" class="radio" name="rights" value="addRights">
            <label for="addRights">Ajout uniquement</label><br>    
        </form>
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
        <form class="userRights" id="userRights"> 
            <input type="radio" id="fullRights" name="rights"   value="fullRights">
            <label for="fullRights">Accès complet</label><br>
            <input type="radio" id="addRights" name="rights"
            value="addRights" checked>
            <label for="addRights">Ajout uniquement</label><br>    
        </form>
    </div>
</div>
<div class="saveBtn">
        <button><a href="/dashboard" >Sauvegarder</a></button>
</div>

<script>

    const rights = document.querySelectorAll('.radio');

    function editRadio() {
        console.log('edit');
        for (let i = 0; i < rights.length; i++) {
            if (rights[i].checked === true) {
                rights[i].setAttribute('checked');
            }
        }
    }

</script>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire
