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
    <title>Modificar datos de persona </title>
</head>
<body>
    <?php
        //incluir conexión a la base de datos
        include '../../../config/conexionBD.php';
        $codigo = $_POST["codigo"];
        $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
        $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
        $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
        $tipo_telefono = isset($_POST["tipo_telefono"]) ? mb_strtoupper(trim($_POST["tipo_telefono"]), 'UTF-8') : null;
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;
        $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
        $usuario = isset($_POST["usuario"]) ? mb_strtoupper(trim($_POST["usuario"]), 'UTF-8') : null;
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
        
        $sql = "UPDATE usuario " .
        "SET usu_cedula = '$cedula', " .
        "usu_nombres = '$nombres', " .
        "usu_apellidos = '$apellidos', " .
        "usu_tipo_telefono = '$tipo_telefono', " . 
        "usu_telefono = '$telefono', " .
        "usu_operadora = '$operadora', " .
        "usu_usuario = '$usuario', " .
        "usu_correo = '$correo' " .
        "WHERE usu_codigo = $codigo";
        if ($conn->query($sql) === TRUE) {
            echo "Se ha actualizado los datos personales correctamemte!!!<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        }
        echo "<a href='../../vista/usuario/index.php?usuario=".$usuario."'>Regresar</a>";
        $conn->close();
    ?>
</body>
</html>