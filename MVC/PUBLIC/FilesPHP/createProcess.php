<?php
include_once('../../MODELS/processModel.php');
include_once('../../CONTROLLERS/processController.php');

header("Content-Type: text/html;charset=utf-8");
session_start();

$title = trim($_POST['title']);
$description = trim( $_POST['description']);
$document = $_FILES['doc']['name'];
$video = $_FILES['video']['name'];
$image = $_FILES['image']['name'];
$department = $_SESSION['departamento'];

$flagDoc = false;
$flagVideo = false;
$flagImage = false;

$rutaDocs = '../../PUBLIC/DATA/DOCS/';
$rutaFileDoc = $rutaDocs . $document;
if (move_uploaded_file($_FILES['doc']['tmp_name'], $rutaFileDoc)) {
    //echo "<script>alert('El documento se subió correctamente');</script>";
    $flagDoc = true;
} else {
    $flagDoc = false;
}

if (!empty($video)) {
    $rutaVideos = '../../PUBLIC/DATA/VIDEOS/';
    $rutaFileVideo = $rutaVideos . $video;
    if (move_uploaded_file($_FILES['video']['tmp_name'], $rutaFileVideo)) {
        //echo "<script>alert('El video se subió correctamente');</script>";
        $flagVideo = true;
    } else {
        $flagVideo = false;
    }
} else {
    $video = null;
    $flagVideo = true;
}

if (!empty($image)) {
    $rutaImages = '../../PUBLIC/DATA/IMAGES/PROCESS/';
    $rutaFileImage = $rutaImages . $image;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $rutaFileImage)) {
        //echo "<script>alert('La imagen se subió correctamente');</script>";
        $flagImage = true;
    } else {
        $flagImage = false;
    }
} else {
    $image = null;
    $flagImage = true;
}

if ($flagDoc && $flagVideo && $flagImage) {
    $objProcessController = new ProcessController();
    echo json_encode($objProcessController->altaProcess($title, $description, $video, $image, $document, $department));
} else {
    echo json_encode('Algún archivo no se subió correctamente, intente de nuevo.');
}
