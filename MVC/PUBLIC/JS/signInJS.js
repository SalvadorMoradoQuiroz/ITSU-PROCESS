$(document).ready(function () {

    var flag = false;

    $('#formRegister').submit(function (ob) {

        if ($('#name').val().length >= 3 && $('#name').val().length <= 30) {
            if ($('#lastName1').val().length >= 3 && $('#lastName1').val().length <= 20) {
                if ($('#lastName2').val().length >= 3 && $('#lastName2').val().length <= 20) {
                    if ($('#correo').val().length <= 70) {
                        if ($('#phone').val().length == 10) {
                            if ($('#departments').val() != '') {
                                if ($('#pass').val().length >= 6 && $('#pass').val().length <= 16) {
                                    if ($('#pass').val() === $('#passConfirm').val()) {
                                        flag = true;
                                    } else {
                                        alert('El campo de contraseña debe ser igual al de confirmar contraseña.');
                                    }
                                } else {
                                    alert('La contraseña debe de tener como mínimo 6 caracteres y como máximo 16.');
                                }
                            } else {
                                alert('Se debe seleccionar un departamento.');
                            }
                        } else {
                            alert('El telefono debe tener 10 caracteres.');
                        }
                    } else {
                        alert('El correo de debe debe ser menor a 70 caracteres.');
                    }
                } else {
                    alert('El apellido materno debe de tener como mínimo 3 caracteres y como máximo 20.');
                }
            } else {
                alert('El apellido paterno debe de tener como mínimo 3 caracteres y como máximo 20.');
            }
        } else {
            alert('El nombre debe de tener como mínimo 3 caracteres y como máximo 30.');
        }

        ob.preventDefault();
        if (flag) {
            console.log($(this).serialize());
            $.ajax({
                type: 'POST',
                url: '/ITSU-PROCESS/MVC/PUBLIC/FilesPHP/createUser.php',
                data: $(this).serialize(),
                //type:'text/json',
                success: function (response) {
                    var jsonData = JSON.parse(response);
                    console.log(jsonData);
                    alert(jsonData);
                    if (jsonData.toString() === '¡Usuario registrado con éxito!') {
                        window.location.href = '../../MVC/VIEWS/login.html';
                    }
                }
            });
        }
    });

});