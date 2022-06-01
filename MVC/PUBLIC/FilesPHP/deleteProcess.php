<?php
include_once('../../MODELS/processModel.php');
include_once('../../CONTROLLERS/processController.php');
$idProceso = $_REQUEST['idP'];
$objProcessController = new ProcessController();
//Se consulta y almacena en memoria el proceso 
$proceso = $objProcessController->consultSpecificProcess($idProceso)->fetch_assoc();
//Se obtiene la respuesta de eliminar el proceso
$res = $objProcessController->deleteProcess($idProceso);

$rutaDocs = '../../PUBLIC/DATA/DOCS/';
$rutaVideos = '../../PUBLIC/DATA/VIDEOS/';
$rutaImages = '../../PUBLIC/DATA/IMAGES/PROCESS/';

function deleFile($ruta)
{
    if (file_exists($ruta)) {
        unlink($ruta);
    }
}

if (strcmp($res, '¡Proceso eliminado!') == 0) {
    if (!empty($proceso['document'])) {
        deleFile($rutaDocs . $proceso['document']);
    }
    if (!empty($proceso['image'])) {
        deleFile($rutaImages . $proceso['image']);
    }
    if (!empty($proceso['video'])) {
        deleFile($rutaVideos . $proceso['video']);
    }
}
echo json_encode($res);
