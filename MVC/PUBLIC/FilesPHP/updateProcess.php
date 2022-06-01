<?php
include_once('../../MODELS/processModel.php');
include_once('../../CONTROLLERS/processController.php');

header("Content-Type: text/html;charset=utf-8");
session_start();

$idProcess = intval($_POST['idProcessInput']);
$title = $_POST['title'];
$description = $_POST['description'];
$document = $_FILES['doc']['name'];
$video = $_FILES['video']['name'];
$image = $_FILES['image']['name'];
$department = $_SESSION['departamento'];

$nameDocPrevious = $_POST['nameDoc'];
$nameVideoPrevious = $_POST['nameVideo'];
$nameImagePrevious = $_POST['nameImage'];

$flagDoc = false;
$flagVideo = false;
$flagImage = false;

$rutaDocs = '../../PUBLIC/DATA/DOCS/';
if (empty($document)) {
    $document = $nameDocPrevious;
    $flagDoc = true;
} else {
    $rutaFileDoc = $rutaDocs . $nameDocPrevious;
    if (file_exists($rutaFileDoc)) {
        if (unlink($rutaFileDoc)) {
            $rutaFileDoc = $rutaDocs . $document;
            if (move_uploaded_file($_FILES['doc']['tmp_name'], $rutaFileDoc)) {
                $flagDoc = true;
            } else {
                $flagDoc = false;
            }
        } else {
            $flagDoc = false;
        }
    } else {
        $rutaFileDoc = $rutaDocs . $document;
        if (move_uploaded_file($_FILES['doc']['tmp_name'], $rutaFileDoc)) {
            $flagDoc = true;
        } else {
            $flagDoc = false;
        }
    }
}

$rutaVideos = '../../PUBLIC/DATA/VIDEOS/';
if (strcmp($nameVideoPrevious, 'No ningún video') == 0) {
    if (!empty($video)) {
        $rutaFileVideo = $rutaVideos . $video;
        if (move_uploaded_file($_FILES['video']['tmp_name'], $rutaFileVideo)) {
            $flagVideo = true;
        } else {
            $flagVideo = false;
        }
    } else {
        $video = null;
        $flagVideo = true;
    }
} else {
    //Si existe un video anterior
    if (empty($video)) {
        $video = $nameVideoPrevious;
        $flagVideo = true;
    } else {
        $rutaFileVideo = $rutaVideos . $nameVideoPrevious;
        if (file_exists($rutaFileVideo)) {
            if (unlink($rutaFileVideo)) {
                $rutaFileVideo = $rutaVideos . $video;
                if (move_uploaded_file($_FILES['video']['tmp_name'], $rutaFileVideo)) {
                    $flagVideo = true;
                } else {
                    $flagVideo = false;
                }
            } else {
                $flagVideo = false;
            }
        } else {
            $rutaFileVideo = $rutaVideos . $video;
            if (move_uploaded_file($_FILES['video']['tmp_name'], $rutaFileVideo)) {
                $flagVideo = true;
            } else {
                $flagVideo = false;
            }
        }
    }
}

$rutaImages = '../../PUBLIC/DATA/IMAGES/PROCESS/';
if (strcmp($nameImagePrevious, 'No ninguna imagen') == 0) {
    if (!empty($image)) {
        $rutaFileImage = $rutaImages. $image;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $rutaFileImage)) {
            $flagImage = true;
        } else {
            $flagImage = false;
        }
    } else {
        $image = null;
        $flagImage = true;
    }
} else {
    //Si existe un video anterior
    if (empty($image)) {
        $image = $nameImagePrevious;
        $flagImage = true;
    } else {
        $rutaFileImage = $rutaImages . $nameImagePrevious;
        if (file_exists($rutaFileImage)) {
            if (unlink($rutaFileImage)) {
                $rutaFileImage = $rutaImages . $image;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $rutaFileImage)) {
                    $flagImage = true;
                } else {
                    $flagImage = false;
                }
            } else {
                $flagImage = false;
            }
        } else {
            $rutaFileImage= $rutaImages . $image;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $rutaFileImage)) {
                $flagImage = true;
            } else {
                $flagImage = false;
            }
        }
    }
}

if ($flagDoc && $flagVideo && $flagImage) {
    $objProcessController = new ProcessController();
    echo json_encode($objProcessController->updateProcess($idProcess, $title, $description, $video, $image, $document, $department));
} else {
    echo json_encode('Algún archivo no se reemplazó correctamente, intente de nuevo.');
}
