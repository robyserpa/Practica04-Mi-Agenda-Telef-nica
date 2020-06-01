<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
    <style type="text/css" rel="stylesheet">
    .error{
    color: red;
    }
    </style>
    </head>
<body>
    <?php
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
    $privilegios = isset($_POST["privilegios"]) ? mb_strtoupper(trim($_POST["privilegios"]), 'UTF-8') : null;
    $tipo_telefono = isset($_POST["tipo_telefono"]) ? mb_strtoupper(trim($_POST["tipo_telefono"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;
    $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;

    $usuario = isset($_POST["usuario"]) ? mb_strtoupper(trim($_POST["usuario"]), 'UTF-8') : null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
    
    $sql = "INSERT INTO usuario VALUES (0, '$cedula', '$nombres', '$apellidos', '$privilegios', '$tipo_telefono', '$telefono',
    '$operadora', '$usuario', '$correo', MD5('$contrasena'))";
    
    if ($conn->query($sql) === TRUE) { 
        echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
    } else {
        if($conn->errno == 1062){
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
        }else{
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    //cerrar la base de datos
    $conn->close();
    echo "<a href='../vista/crear_usuario.html'>Regresar</a>";

    ?>
</body>
</html>