$(document).ready(function () {
    $('#message').bind('keypress', function(e){
        if(e.keyCode==13){
            var msj = $('#message').val();
            if(msj.length>1 && msj.length<500){

                var dataSend = {
                    message:msj
                };

                $.ajax({
                    type: "POST",
                    url: '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/registerMessage.php', 
                    data: dataSend,
                    success: function (response) {
                        var jsonData = JSON.parse(response);
                        console.log(jsonData);
                        //alert(jsonData);
                        if(jsonData.toString() === '¡Mensaje registrado con éxito!'){
                            window.location.href = '../VIEWS/questionsAnswers.php';
                        }else{
                            alert('Ocurrió un problema al registrar el mensaje');
                        }
                    }
                });
            }else{
                alert('El tamaño del mensaje debe ser mayor a 1 y menor a 500 caracteres.');
            }
        }
    });
});