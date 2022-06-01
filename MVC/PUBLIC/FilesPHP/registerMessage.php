<?php
include_once('../../MODELS/messagesModel.php');
include_once('../../CONTROLLERS/messagesController.php');

$message = $_POST['message'];

$objMessageController = new MessagesController();
echo json_encode($objMessageController->registerMessage($message));

?>