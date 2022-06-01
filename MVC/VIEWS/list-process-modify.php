<?php
include_once('../MODELS/processModel.php');
include_once('../CONTROLLERS/processController.php');
session_start();

$imageAux = '../PUBLIC/DATA/IMAGES/';
$flag = false;
$department = $_SESSION['departamento'];

$objProcessController = new ProcessController();
$procesosArray = $objProcessController->consultProcess($department);

$aux = '';
switch ($department) {
    case 11:
        $aux = "Deportivo";
        break;
    case 12:
        $aux = "Cultural";
        break;
    case 10:
        $aux = "ServiciosEscolares";
        break;
    case 1:
        $aux = "ISC";
        break;
    case 2:
        $aux = "IA";
        break;
    case 3:
        $aux = "IC";
        break;
    case 4:
        $aux = "IM";
        break;
    case 5:
        $aux = "IMA";
        break;
    case 6:
        $aux = "II";
        break;
    case 7:
        $aux = "IE";
        break;
    case 8:
        $aux = "IAL";
        break;
    case 9:
        $aux = "LenguasExtranjeras";
        break;
    default:
        $aux = "logoITSU2.png";
        break;
}
$imageAux = $imageAux . $aux;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesos a modificar</title>
    <!-- Bootstrap core CSS -->
    <link href="../PUBLIC/CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../PUBLIC/CSS/album.css" rel="stylesheet">

    <link rel="stylesheet" href="../PUBLIC/CSS/styleListProcess.css">


    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
</head>

<body>
    <section id="listProcess">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php $cont = 0;?>
                    <?php if (mysqli_num_rows($procesosArray) > 0) { ?>
                        <?php while ($proceso = $procesosArray->fetch_assoc()) { $cont++; ?>
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src=<?php echo $imageAux ?> alt="">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $proceso['title'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="../VIEWS/update-process.php?idProcesoU=<?php echo $proceso['idProcess']; ?>">
                                                    <button type="button" class="btn btn-sm btn-outline-primary">Editar</button>
                                                </a>
                                                <!-- <a href="../PUBLIC/FilesPHP/deleteProcess.php"> -->
                                                <button type="button" class="btn btn-sm btn-outline-danger" id="btnEliminar<?php echo $cont;?>" name="btnEliminar<?php echo $cont;?>" value="<?php echo $proceso['idProcess'];?>">Eliminar</button>
                                                <!-- </a> -->
                                            </div>
                                            <!-- <small class="text-muted">Fecha de publicación</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <div class="card-body">
                                    <p class="card-text">No hay procesos para modificar.</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../PUBLIC/JS/listProcessModify.js"></script>
</body>

</html>