<!DOCTYPE html>
<html>
<head>
    <?php
        session_start();
        if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
            header("Location: /Hipermedial/SistemaDeGestion/public/vista/login.html");
        }
    ?>
    <meta charset="UTF-8">
    <title>Modificar datos de persona</title>
    
    <link rel="stylesheet" type="text/css" href="../../../extras/css/general.css" />
    <link rel="stylesheet" type="text/css" href="../../../extras/css/modificar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header class="cabecera">
        <img id="logo" src="../../../extras/images/logo_android.png" alt=""/>
        <p id="buscar">Buscar: <input type="search" ></p>
        <a href="tel:0998831305"><img id="ajustes1" src="../../../extras/images/usuario.png" alt=""></a>
        <a href="mailto:rserpa@est.ups.edu.ec"><img id="ajustes2" src="../../../extras/images/mensaje.png" alt=""></a>
        <a href="../../../public/vista/login.html"><img id="ajustes3" src="../../../extras/images/plus.png" alt=""></a>
        <nav>
        <ul>
            <li><a href="../../../config/cerrar_sesion.php">Cerrar Sesión</a></li>
            <li><a href="index.php">Regresar</a></li>
        </ul>
        </nav>
        <h1>Modificar</h1>
    </header>
    <?php
        $codigo = $_GET["codigo"];
    ?>
    <form id="formulario01" method="POST" action="../../controladores/admin/cambiar_contrasena.php">

        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
        <label for="contrasena1">Contraseña Nueva (*)</label>
        <input type="password" id="contrasena1" name="contrasena1" value="" required
        placeholder="Ingrese su contraseña nueva ..."/>
        <br>

        <input type="submit" id="modificar" name="modificar" value="Modificar" />
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
    </form>
</body>
</html>