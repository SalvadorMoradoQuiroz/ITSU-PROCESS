<?php
error_reporting(E_ERROR);
session_start();
echo 'Cerrando sesión....';
session_destroy();
header('Location:../../VIEWS/login.php');
?>