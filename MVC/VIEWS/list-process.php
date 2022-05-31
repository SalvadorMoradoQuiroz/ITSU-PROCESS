<?php
include_once('../MODELS/processModel.php');
include_once('../CONTROLLERS/processController.php');
$imageAux = '../PUBLIC/DATA/IMAGES/logoITSU2.png';
$procesosArray = null;
$flag = false;
if (array_key_exists('value', $_REQUEST)) {
    if (isset($_REQUEST['value'])) {
        $department = 0;
        $imageAux = '../PUBLIC/DATA/IMAGES/' . $_REQUEST['value'] . '.png';
        switch ($_REQUEST['value']) {
            case "Deportivo":
                $department = 11;
                break;
            case "Cultural":
                $department = 12;
                break;
            case "ServiciosEscolares":
                $department = 10;
                break;
            case "ISC":
                $department = 1;
                break;
            case "IA":
                $department = 2;
                break;
            case "IC":
                $department = 3;
                break;
            case "IM":
                $department = 4;
                break;
            case "IMA":
                $department = 5;
                break;
            case "II":
                $department = 6;
                break;
            case "IE":
                $department = 7;
                break;
            case "IAL":
                $department = 8;
                break;
            case "LenguasExtranjeras":
                $department = 9;
                break;
        }
        //echo $department;
        $objProcessController = new ProcessController();
        $procesosArray = $objProcessController->consultProcess($department);
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesos</title>
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
                    <?php if ($procesosArray != null) { ?>
                        <?php while ($proceso = $procesosArray->fetch_assoc()) {
                            $flag = true;  ?>
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src=<?php echo $imageAux ?> alt="">
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $proceso['title'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="../VIEWS/publication-process.php?idProceso=<?php echo $proceso['idProcess']; ?>">
                                                    <button type="button" class="btn btn-sm btn-outline-primary">Ver</button>
                                                </a>
                                            </div>
                                            <!-- <small class="text-muted">Fecha de publicación</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php }
                    if (!$flag) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <div class="card-body">
                                    <p class="card-text">No hay procesos para mostrar.</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>