<?php
    require "libs/functions.php";
    require "libs/variables.php";
    include "partials/_header.php";
    include "partials/_navbar.php";
?>
<style>
    .profile{
        display: flex;
        flex-direction: row;
    }
</style>

<div class="m-5 profile">
    <img width="200px" height="200px" src="img/user.webp" alt="user" class="img-fluid">
    <div class="name-container ms-5 pt-5">
    <h1><?php echo $_COOKIE["auth"]["name"]?></h1>
        <?php if($_COOKIE["auth"]["role"] == "admin"): ?>
            <p class="fst-italic fs-5">Yönetici</p>
        <?php else: ?>
            <h3>Kullanıcı</h3>
        <?php endif; ?>
    </div>

</div>