<?php 
    //incluir conexión a la base de datos 
    include "conexionBD.php"; 
    
    $texto = $_GET['texto']; 
    //echo "Hola " . $cedula; 

    $sql = "SELECT * FROM usuario WHERE (usu_cedula='$texto' or usu_correo='$texto') and usu_eliminado='N'"; 
    //cambiar la consulta para puede buscar por ocurrencias de letras 

    $result = $conn->query($sql); 

    echo " <table class='misdatos''> 
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
        </tr>"; 
    if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) { 
            echo "<tr>"; 
            echo " <td>" . $row["usu_cedula"] . "</td>";
            echo " <td>" . $row['usu_nombres'] ."</td>";
            echo " <td>" . $row['usu_apellidos'] . "</td>";
            echo " <td>" . $row['usu_privilegios'] . "</td>";
            echo " <td>" . $row['usu_tipo_telefono'] . "</td>";
            echo " <td> <a href=tel:" . $row['usu_telefono'] . ">". $row['usu_telefono'] ."</a></td>";
            echo " <td>" . $row['usu_operadora'] . "</td>";

            echo " <td>" . $row['usu_usuario'] . "</td>";
            echo " <td> <a href=mailto:" . $row['usu_correo'] . ">". $row['usu_correo'] ."</td>";
            echo " <td> <a href='../admin/eliminar.php?codigo=" . $row['usu_codigo'] . "'>Eliminar</a> </td>";
            echo " <td> <a href='../admin/modificar.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
            echo " <td> <a href='../admin/cambiar_contrasena.php?codigo=" . $row['usu_codigo'] . "'>Cambiar
            contraseña</a> </td>";
        } 
    } else { 
        echo "<tr>"; 
        echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>"; 
        echo "</tr>"; 
    } 
    
    echo "</table>"; 

    $conn->close(); 

?>