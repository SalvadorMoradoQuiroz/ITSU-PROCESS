<?php
include_once('../MODELS/processModel.php');
include_once('../CONTROLLERS/processController.php');
$proceso = null;
if (array_key_exists('idProcesoU', $_REQUEST)) {
    if (isset($_REQUEST['idProcesoU'])) {
        $objProcessController = new ProcessController();
        $proceso = $objProcessController->consultSpecificProcess($_REQUEST['idProcesoU'])->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar proceso</title>
    <link rel="stylesheet" href="../PUBLIC/CSS/styleCreateProcess.css">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
</head>

<body>
    <section id="createProcess">
        <div class="classDivTitle">
            <h2>Actualizar proceso</h2>
        </div>
        <form action="" class="classFormulario" id="formUpdateProcess" name="formUpdateProcess" enctype="multipart/form-data">
            <div class="classLeft">
                <label for="title" class="classLabel">Titulo (Obligatorio)</label>
                <br>
                <input type="text" id="title" name="title" class="classTextInput" value="<?php echo $proceso['title'] ?>">
            </div>
            <div class="classLeft">
                <label for="description" class="classLabel">Descripción (Obligatorio)</label>
                <br>
                <textarea id="description" name="description" required class="classTextInput classTextInputTitle" cols="30" rows="10">
                    <?php echo $proceso['description'] ?>
                </textarea>
                <!-- <input type="text" id="description" name="description" class="classTextInput classTextInputTitle"> -->
            </div>
            <div class="classAlingLeft">
                <p>
                    Si deseas actualizar o subir un archivo de video, imagen o documento, simplemente selecciona un nuevo archivo, cuando se de clic en Actualizar, el sistema lo reemplazará automáticamente.
                </p>
            </div>
            <table class="classTable">
                <tr>
                    <td>
                        <label for="video" class="classLabel">Video (Opcional)</label>
                        <input type="text" id="nameVideo" name="nameVideo"  value="<?php $nameV = empty($proceso['video']) ? 'No ningún video' : $proceso['video'];
                                                                                            echo $nameV; ?>">
                        <input type="file" id="video" name="video" class="classTextInputFile">
                    </td>
                    <td>
                        <label for="image" class="classLabel">Imagen (Opcional)</label>
                        <input type="text" id="nameImage" name="nameImage"  value="<?php $nameI = empty($proceso['image']) ? 'No ninguna imagen' : $proceso['image'];
                                                                                            echo $nameI; ?>">
                        <input type="file" id="image" name="image" class="classTextInputFile">
                    </td>
                    <td>
                        <label for="doc" class="classLabel">Documento</label>
                        <input type="text" id="nameDoc" name="nameDoc"  value="<?php echo $proceso['document'] ?>">
                        <input type="file" id="doc" name="doc" class="classTextInputFile">
                    </td>
                </tr>
            </table>
            <div>
                <input type="text" id="idProcessInput" name="idProcessInput" value="<?php echo $proceso['idProcess'] ?>" hidden>
            </div>
            <div>
                <input type="submit" value="Actualizar" id="buttonPublicar" name="buttonPublicar">
            </div>
        </form>
    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../PUBLIC/JS/updateProcess.js"></script>
</body>

</html>