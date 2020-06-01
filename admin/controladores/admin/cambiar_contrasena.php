<!DOCTYPE html>
<html>
<head>
    <?php
        session_start();
        if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
            header("Location: /SistemaDeGestion/public/vista/login.html");
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
        $contrasena1 = isset($_POST["contrasena1"]) ? trim($_POST["contrasena1"]) : null;
        $sqlContrasena1 = "UPDATE usuario " .
        "SET usu_password = MD5('$contrasena1') " .
        "WHERE usu_codigo = $codigo";
        $result1 = $conn->query($sqlContrasena1);
        echo "Se ha actualizado la contraseña correctamemte!!!<br>"; 
        echo "<a href='../../vista/admin/index.php'>Regresar</a>";
        $conn->close();
    ?>
</body>
</html>