$(document).ready(function () {
    $('#formCreateProcess').submit(function (ob) {
        ob.preventDefault();

        if ($('#title').val().length >= 5 && $('#title').val().length <= 50) {
            if ($('#description').val().length >= 20 && $('#description').val().length <= 700) {


                var formData = new FormData(document.getElementById("formCreateProcess"));
                console.log(formData.toString());
                $.ajax({
                    type: 'POST',
                    url: '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/createProcess.php',
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        var jsonData = JSON.parse(response);
                        console.log(jsonData);
                        alert(jsonData);
                        if (jsonData.toString() === 'Proceso registrado con éxito!') {
                            window.location.href = '../../MVC/VIEWS/admin.php';
                        }
                    }
                });


            } else {
                alert('La descripción debe de tener como mínimo 20 caracteres y como máximo 700.');
            }
        } else {
            alert('El título debe de tener como mínimo 5 caracteres y como máximo 50.');
        }
    });
});