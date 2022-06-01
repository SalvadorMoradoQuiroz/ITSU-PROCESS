$(document).ready(function () {
    $('#formUpdateProcess').submit(function (ob) {
        ob.preventDefault();

        if ($('#title').val().length >= 5 && $('#title').val().length <= 50) {
            if ($('#description').val().length >= 20 && $('#description').val().length <= 700) {


                var formData = new FormData(document.getElementById("formUpdateProcess"));
                console.log(formData.toString());
                $.ajax({
                    type: 'POST',
                    url: '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/updateProcess.php',
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        var jsonData = JSON.parse(response);
                        console.log(jsonData);
                        alert(jsonData);
                        if (jsonData.toString() === '¡Se actualizarón los datos del proceso!') {
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