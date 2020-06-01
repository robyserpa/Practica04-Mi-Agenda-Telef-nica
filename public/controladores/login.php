<?php
    session_start();

    include '../../config/conexionBD.php';
    
    $usuario = isset($_POST["usuario"]) ? trim($_POST["usuario"]) : null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
    
    $sql = "SELECT * FROM usuario WHERE usu_usuario = '$usuario' and usu_password = MD5('$contrasena')";
    $aux=false;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row['usu_privilegios'] == 'USER') {
                $aux=true;
            }elseif($row['usu_privilegios'] == 'ADMIN') {
                $aux=false;
            }
        }
        $_SESSION['isLogged'] = TRUE;
        if($aux) {
            header("Location: ../../admin/vista/usuario/index.php?usuario=".$usuario);
        }else {
            header("Location: ../../admin/vista/admin/index.php");
        }
        
    } else {
        header("Location: ../vista/login.html");
    }

    $conn->close();
?>