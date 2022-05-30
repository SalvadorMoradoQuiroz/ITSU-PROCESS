<?php
$imageAux = '../PUBLIC/DATA/IMAGES/logoITSU2.png';
if(array_key_exists('value', $_REQUEST)){
    if(isset($_REQUEST['value'])){
        $imageAux = '../PUBLIC/DATA/IMAGES/' . $_REQUEST['value'] . '.png';
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

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src=<?php echo $imageAux?>
                                alt="">
                            <div class="card-body">
                                <p class="card-text">Nombre del proceso o descripción</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../VIEWS/publication-process.html">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Ver</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">Fecha de publicación</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src=<?php echo $imageAux?>
                                alt="">
                            <div class="card-body">
                                <p class="card-text">Nombre del proceso o descripción</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../VIEWS/publication-process.html">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Ver</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">Fecha de publicación</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src=<?php echo $imageAux?>
                                alt="">
                            <div class="card-body">
                                <p class="card-text">Nombre del proceso o descripción</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../VIEWS/publication-process.html">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Ver</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">Fecha de publicación</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    

                </div>
            </div>
        </div>
    </section>
</body>

</html>