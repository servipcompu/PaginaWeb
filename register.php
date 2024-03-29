<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/estilo.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="Shortcut icon" href="assets/coders2.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body class="body1">
    <?php
    include("assets/header.php");
    ?>
    <header class="shield">

        <svg class="bi bi-person-plus" width="5em" height="5em" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM6 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0zm4.5 0a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd" />
        </svg>
        <h2 class="h21" style="margin-left: 30px">REGISTRO</h2>
    </header>

    <div class=" div1 " style=" margin-top:50px ">

        <div align="center">
            <form action="logica/logica_registro.php" method="POST" class="form1">
                <div class="div2">
                    <label for="nombre_usuario" class="data"> Usuario: </label><br>
                    <input type="text" class="text1 data" name="nombre_usuario" placeholder=" Nombre de Usuario" maxlength="155" required>
                    <br><br>
                    <label for="nombre_completo" class="data"> Nombre: </label><br>
                    <input type="text" class="text1 data" name="nombre_completo" maxlength="255" placeholder=" Nombre completo" required>
                    <br><br>
                    <label for="email" class="data"> Email: </label><br>
                    <input type="email" class="text1 data" name="email" maxlength="35" placeholder=" Correo electronico" required>
                    <br><br>
                    <label for="password" class="data"> Contraseña: </label><br>
                    <input type="password" class="text1 data" name="password" maxlength="10" placeholder=" Contraseña elegida" required>
                    <br><br>
                </div>
                <input type="submit" name="submit" value="ACEPTAR" class="btn1">
                <input type="reset" name="clear" value="BORRAR CAMPOS" class="btn1">
            </form>
        </div>
    </div>
</body>

</html>
