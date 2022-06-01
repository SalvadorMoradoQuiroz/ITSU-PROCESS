<?php
include_once('../MODELS/messagesModel.php');
include_once('../CONTROLLERS/messagesController.php');
$objMessageController = new MessagesController();
$mensajes = $objMessageController->consultAllMessages();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chat room with right list - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../PUBLIC/CSS/styleQuestionsAnswers.css">
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <h4><strong>Foro de preguntas y respuestas sobre los procesos de los departamentos del
                                    ITSU</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox chat-view">

                        <div class="ibox-content">


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="chat-discussion">

                                        <?php if (mysqli_num_rows($mensajes) > 0) { ?>
                                            <?php while ($msj = $mensajes->fetch_assoc()) { ?>

                                                <div class="chat-message left">
                                                    <img class="message-avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                                    <div class="message">
                                                        <!-- <a class="message-author" href="#"> Michael Smith </a> -->
                                                        <span class="message-date" <?php echo $msj['date']; ?>></span>
                                                        <span class="message-content">
                                                            <?php echo $msj['message']; ?>
                                                        </span>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        <?php } else { ?>
                                            <div class="col-lg-12">
                                                <div class="chat-discussion">
                                                    <div class="chat-message left">
                                                        <div class="message">
                                                            <span class="message-content">
                                                                No hay mensajes aún, se el primero en iniciar una conversación.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="chat-message-form">
                                        <div class="form-group">
                                            <textarea class="form-control message-input" name="message" id="message" placeholder="Escribe el mensaje y presiona enter para enviar…"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../PUBLIC/JS/questionsAnswers.js"></script>
</body>