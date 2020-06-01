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
    <title>Gestión de usuarios</title>

    <script src="../../../extras/js/buscarusu.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../extras/css/general.css" />
    <link rel="stylesheet" type="text/css" href="../../../extras/css/indexphp.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header class="cabecera">
        <img id="logo" src="../../../extras/images/logo_android.png" alt=""/>
        <p id="buscar1">Buscar: <input type="search" ></p>
        <a href="tel:0998831305"><img id="ajustes1" src="../../../extras/images/usuario.png" alt=""></a>
        <a href="mailto:rserpa@est.ups.edu.ec"><img id="ajustes2" src="../../../extras/images/mensaje.png" alt=""></a>
        <a href="../../../public/vista/login.html"><img id="ajustes3" src="../../../extras/images/plus.png" alt=""></a>
        <nav>
        <ul>
            <li><a href="../../../config/cerrar_sesion.php">Cerrar Sesión</a></li>
        </ul>
        </nav>
        <h1>Datos</h1>
    </header>

    <aside class="datos">
    <h2>Buscar a otras personas usando la cedula o su correo.</h2>
      <form onsubmit="return buscarPorTexto()" > 
          <input type="text" id="texto" name="texto" value=""> 
          <input type="button" id="buscar" name="buscar" value="Buscar" 
          onclick="buscarPorTexto()"> 
          <br>
          <br>
          <div id="informacion"><b>Datos de la persona</b></div>
          <br>
          <br>
      </form>
      <h2>Usuario</h2>
      <table class="misdatos">
        <tr>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Privilegios</th>
            <th>Tipo Telefono</th>
            <th>Telefono</th>
            <th>Operadora</th>
            <th>Usuario</th>
            <th>Correo</th>
        </tr>
        
        <?php
        include '../../../config/conexionBD.php';
        $usuario = $_GET["usuario"];

        $sql = "SELECT * FROM usuario WHERE usu_usuario = '$usuario' and usu_eliminado='N'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                  echo " <td>" . $row["usu_cedula"] . "</td>";
                  echo " <td>" . $row['usu_nombres'] ."</td>";
                  echo " <td>" . $row['usu_apellidos'] . "</td>";
                  echo " <td>" . $row['usu_privilegios'] . "</td>";
                  echo " <td>" . $row['usu_tipo_telefono'] . "</td>";
                  echo " <td>" . $row['usu_telefono'] . "</td>";
                  echo " <td>" . $row['usu_operadora'] . "</td>";

                  echo " <td>" . $row['usu_usuario'] . "</td>";
                  echo " <td>" . $row['usu_correo'] . "</td>";
                  echo " <td> <a href='modificarusu.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
                  echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_codigo'] . "'>Cambiar
                  contraseña</a> </td>";

                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
            echo "</tr>";
        }

        $conn->close();
        ?>
      </table>
    </aside>
    

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