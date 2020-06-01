<!DOCTYPE html>
<html>
<head>
    <?php
        session_start();
        if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
            header("Location: /Hipermedial/AgendaTelefonica/public/vista/login.html");
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
        <h1>Cambiar Contraseña</h1>
    </header>
    <?php
        $codigo = $_GET["codigo"];
    ?>
    <form id="formulario01" method="POST" action="../../controladores/usuario/cambiar_contrasena.php">

        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
        <label for="contrasena1">Contraseña Actual (*)</label>
        <input type="password" id="contrasena1" name="contrasena1" value="" required
        placeholder="Ingrese su contraseña actual ..."/>
        <br>
        <label for="contrasena2">Contraseña Nueva (*)</label>
        <input type="password" id="contrasena2" name="contrasena2" value="" required
        placeholder="Ingrese su contraseña nueva ..."/>
        <br>

        <input type="submit" id="modificar" name="modificar" value="Modificar" />
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
    </form>
    <footer class="contactar">
      <aside>
        <a href="https://www.facebook.com" class="fa fa-facebook"></a>
        <a href="https://www.instagram.com" class="fa fa-instagram"></a>
        <img src="../../../extras/images/logo_social.png" alt="">
        <p>
          Roberto Serpa <br>
          Correo: <a href="mailto:rserpa@est.ups.edu.ec"> rserpa@est.ups.edu.ec</a> <br>
        </p>
      </aside>
      <aside>
        <form>
          <fieldset>
            <legend>¿Quiénes somos nosotros?</legend>
            <label>
              La historia de esta pagina surge gracias al Sistema 
              Operativo Android.
            </label>
            <label>Nombre del Equipo Android.Maravilloso</label>
            <label>
              ¿Por qué Nosotros? Somos una organización que busca 
              información y datos curiosos de Android.
            </label>
            <label>Contactanos</label>
          </fieldset>
          </form>
      </aside>
      <aside>
        <form>
          <fieldset>
          <legend>Luis Montoya</legend>
          <label>
            Asistente personal encargado de la busqueda de 
            información y novedades acerca del sistema.
          </label>
          <label>Trabaja para el equipo Android.OK</label>
          <label>¿Qué hace? 
            Diseña imagenes con relacion al Sistema Operativo Android.
          </label>
          <label>Contáctalo</label>
          </fieldset>
          </form>
      </aside>
    </footer>
</body>
</html>