$(document).ready(function () {
    $('#formCreateProcess').submit(function (ob) {
        ob.preventDefault();

        console.log($(this).serialize());
            $.ajax({
                type: 'POST',
                url: '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/createProcess.php',
                data: $(this).serialize(),
                //type:'text/json',
                success: function (response) {
                    var jsonData = JSON.parse(response);
                    console.log(jsonData);
                    alert(jsonData);
                    if (jsonData.toString() === 'Proceso registrado con éxito!') {
                        //window.location.href = '../../MVC/VIEWS/login.html';
                    }
                }
            });
    });
});