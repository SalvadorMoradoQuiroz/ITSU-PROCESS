<?php
include_once('../../MODELS/logInModel.php');
include_once('../../CONTROLLERS/logInController.php');

header("Content-Type: text/html;charset=utf-8");

$email = $_POST['correoLogIn'];
$pass = $_POST['passLogIn'];

$objLogInController = new LogInController();
echo json_encode($objLogInController->verifyUser($email, $pass));
?>