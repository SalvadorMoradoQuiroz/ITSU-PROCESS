<?php
include_once('../MVC/CONTROLLERS/signInController.php');

$name = $_POST['name'];
$lastName1 = $_POST['lastName1'];
$lastName2 = $_POST['lastName2'];
$userName = $_POST['userName'];
$correo = $_POST['correo'];
$phone = $_POST['phone'];
$departments = $_POST['departments'];
$pass = $_POST['pass'];

$objSingInController = new SignInController();
echo json_encode($objSingInController->altasUsers($name, $userName, $lastName1, $lastName2, $correo, $phone, $departments, $pass));

?>