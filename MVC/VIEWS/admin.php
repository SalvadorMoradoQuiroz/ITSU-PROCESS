<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../PUBLIC/CSS/styleAdmin.css">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
</head>

<body>
    <section id="admin">
        <div class="classDivTitle">
            <h2>Inicio de Administrador</h2>
            <br>
            <h3>Bienvenido <?php echo $_SESSION['nombreCompleto']; ?></h3>
        </div>
        <table class="classTable">
            <tr>
                <td>
                    <a href="../VIEWS/create-process.html">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="9" />
                            <line x1="9" y1="12" x2="15" y2="12" />
                            <line x1="12" y1="9" x2="12" y2="15" />
                        </svg>
                    </a>
                </td>
                <td>
                    <a href="../VIEWS/list-process-modify.html">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                            <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                            <line x1="16" y1="5" x2="19" y2="8" />
                        </svg>
                    </a>
                </td>
                <td>
                    <a href="../PUBLIC/FilesPHP/closeSession.php">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                        </svg>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../VIEWS/create-process.html">
                        <button class="classButtonsAdmin">Nuevo Proceso</button>
                    </a>
                </td>
                <td>
                    <a href="../VIEWS/list-process-modify.html">
                        <button class="classButtonsAdmin">Modificar o Eliminar</button>
                    </a>
                </td>
                <td>
                    <a href="../PUBLIC/FilesPHP/closeSession.php">
                        <button class="classButtonsAdmin">Cerrar Sesión</button>
                    </a>
                </td>
            </tr>
        </table>

    </section>
</body>

</html>