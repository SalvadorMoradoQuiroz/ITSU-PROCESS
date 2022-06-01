$(document).ready(function () {
    $('.btn-outline-danger').click(function (event) {
        var resultado = window.confirm('¿Estas seguro de eliminar este proceso? ');
        if (resultado === true) {
            //Eliminar proceso
            //alert($('#'+event.target.id).val());
            var id = $('#'+event.target.id).val();
            var urlDelete = '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/deleteProcess.php?idP='+id;
            $.ajax({
                type: 'GET',
                url: urlDelete,
                success: function (response) {
                    var jsonData = JSON.parse(response);
                    console.log(jsonData);
                    alert(jsonData);
                    if(jsonData.toString() === '¡Proceso eliminado!'){
                        window.location.href = '../../MVC/VIEWS/list-process-modify.php';
                    }
                }
            });
        } else {
            //Cancelar
        }
    });
});