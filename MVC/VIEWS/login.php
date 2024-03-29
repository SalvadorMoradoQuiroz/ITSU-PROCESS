<?php
error_reporting(E_ERROR);
session_start();
if(array_key_exists('usuario', $_SESSION) && array_key_exists('contra', $_SESSION)){
    header('Location:admin.php');
}else{
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../PUBLIC/CSS/styleLogin.css">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
</head>

<body>
    <section id="login">
        <div class="classDivTitle">
            <h2>Login</h2>
        </div>
        <form action="" class="classFormulario" id="formLogIn" name="formLogIn">
            <table class="classTable">
                <tr>
                    <td class="classLeft">
                        <label for="correoLogIn" class="classLabel">Correo</label>
                    </td>
                    <td>
                        <input type="email" id="correoLogIn" name="correoLogIn" placeholder="example@example.com" class="classTextInput" required>
                    </td>
                </tr>
                <tr>
                    <td class="classLeft">
                        <label for="passLogIn" class="classLabel">Contraseña</label>
                    </td>
                    <td>
                        <input type="password" id="passLogIn" name="passLogIn" placeholder="Contraseña" class="classTextInput" required>
                    </td>
                </tr>
            </table>
            <div class="classDivBtnLogin">
                <br>
                <input type="submit" value="Iniciar Sesión" id="buttonLogin">
            </div>
        </form>

        <div class="classDivButtonsPass" name="buttons" id="buttons">
            <button class="classButtonPass">¿Olvidaste tu contraseña?</button>
            <br>
            <a href="sign-in.html">
                <button class="classButtonSignIn">Registrarse</button>
            </a>
        </div>
    </section>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../PUBLIC/JS/logInJS.js"></script>
</body>

</html>