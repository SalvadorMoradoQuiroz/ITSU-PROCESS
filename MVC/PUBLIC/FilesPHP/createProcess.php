<?php
include_once('../../MODELS/processModel.php');
include_once('../../CONTROLLERS/processController.php');

header("Content-Type: text/html;charset=utf-8");
session_start();

$title = $_POST['title'];
$description = $_POST['description'];
$video = $_POST['video'];
$image = $_POST['image'];
$document = $_POST['doc'];
$department = $_SESSION['departamento'];

$objProcessController = new ProcessController();
echo json_encode($objProcessController->altaProcess($title, $description, $video, $image, $document, $department ));

?>