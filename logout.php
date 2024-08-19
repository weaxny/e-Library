<?php 
    setcookie("auth[username]", "", time() - 60*60*24);
    setcookie("auth[name]", "", time() - 60*60*24);
    setcookie("auth[role]", "", time() - 60*60*24); 

    header("Location: index.php");
?>