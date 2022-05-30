<?php
include_once('../CONTROLLERS/processController.php');
$proceso = null;
if (array_key_exists('idProceso', $_REQUEST)) {
    if (isset($_REQUEST['idProceso'])) {
        $objProcessController = new ProcessController();
        $proceso = $objProcessController->consultSpecificProcess($_REQUEST['idProceso'])->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
    <link rel="stylesheet" href="../PUBLIC/CSS/stylePublicactionProcess.css">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
</head>

<body>
    <section id="publicationProcess">
        <?php if ($proceso != null) { ?>
            <div>
                <h2><?php echo $proceso['title']; ?></h2>
            </div>
            <div>
                <?php if (!strcmp($proceso['video'], '') == 0) { ?>
                    <video src="../PUBLIC/DATA/VIDEOS/<?php echo $proceso['video'] ?>" id="videoProcess" name="videoProcess" controls></video>
                <?php } ?>
            </div>
            <div>
                <p id="descriptionProcess">
                    <?php echo $proceso['description'] ?>
                </p>
            </div>
            <div>
                <?php if (!strcmp($proceso['image'], '') == 0) { ?>
                    <a href="../PUBLIC/DATA/IMAGES/PROCESS/<?php echo $proceso['image'] ?>" target="blank">
                        <img src="../PUBLIC/DATA/IMAGES/PROCESS/<?php echo $proceso['image'] ?>" alt="" id="imagenProcess">
                    </a>
                <?php } ?>
            </div>
            <div>
                <a href="">
                    <div class="divDownloadFile">
                        <span class="spanDownloadFile">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-text" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <line x1="9" y1="9" x2="10" y2="9" />
                                <line x1="9" y1="13" x2="15" y2="13" />
                                <line x1="9" y1="17" x2="15" y2="17" />
                            </svg>
                        </span>
                        <span class="spanDownloadFile">
                            <?php echo $proceso['document'];?>
                        </span>
                        <span class="spanDownloadFile">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <polyline points="7 11 12 16 17 11" />
                                <line x1="12" y1="4" x2="12" y2="16" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
        <?php } ?>
    </section>
</body>

</html>