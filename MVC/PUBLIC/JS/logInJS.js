$(document).ready(function () {

    $('#formLogIn').submit(function (ob) {
        ob.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/verifyUser.php',
            data: $(this).serialize(),
            //type:'text/json',
            success: function (response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                alert(jsonData);
                if(jsonData.toString() === '¡Credenciales correctas!'){
                    window.location.href = '../../MVC/VIEWS/admin.html';
                }
            }
        });
    });
});