<?php
include_once('../../MODELS/logInModel.php');
$objAux = new LogInModel();
session_start();
$_SESSION['usuario']=$_REQUEST['emailV'];
$_SESSION['contra']=$_REQUEST['passV'];
$_SESSION['nombreCompleto'] = $objAux->consultFullName($_REQUEST['emailV']);
$_SESSION['departamento'] = $objAux->consultDepartment($_REQUEST['emailV']);
echo 'Iniciando sesión.....';
header('Location:../../VIEWS/admin.php');
?>