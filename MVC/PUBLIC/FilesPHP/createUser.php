<?php
include_once('../../MODELS/signInModel.php');
include_once('../../CONTROLLERS/signInController.php');

header("Content-Type: text/html;charset=utf-8");

$name = $_POST['name'];
$lastName1 = $_POST['lastName1'];
$lastName2 = $_POST['lastName2'];
$correo = $_POST['correo'];
$phone = $_POST['phone'];
$departments = $_POST['departments'];
$pass = $_POST['pass'];

$objSingInController = new SignInController();
echo json_encode($objSingInController->altasUsers($name, $lastName1, $lastName2, $correo, $phone, $departments, $pass, 0));

?>