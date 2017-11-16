<?php
    echo 'Cerrando sesión...';
   session_start();
   unset($_SESSION["useremail"]);
   header('Refresh: 2; URL = index.php');
?>