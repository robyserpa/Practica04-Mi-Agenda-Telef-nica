# Practica04-Mi-Agenda-Telef-nica
| ![](RackMultipart20200601-4-i6yczr_html_f63b2f98374d4bc6.png) | **VICERRECTORADO DOCENTE** | **Código:** GUIA-PRL-001 |
| --- | --- | --- |
| CONSEJO ACADÉMICO | **Aprobación:** 2016/04/06 |
| **Formato:** Guía de Práctica de Laboratorio / Talleres / Centros de Simulación |

| ![](RackMultipart20200601-4-i6yczr_html_b94fd5c8d846e117.png) | **PRÁCTICA DE LABORATORIO** |
| --- | --- |
|
 |
| **CARRERA** : COMPUTACION | **ASIGNATURA** : HIPERMEDIAL |
| --- | --- |
| **NRO. PRÁCTICA** : | 4 | **TÍTULO PRÁCTICA** : Resolución de problemas sobre PHP y MySQL |
| --- | --- | --- |
| **OBJETIVO ALCANZADO:** • Diseñar adecuadamente elementos gráficos en sitios web en Internet. • Crear sitios web aplicando estándares actuales. • Desarrollar aplicaciones web interactivas y amigables al usuario. |
| --- |
| **ACTIVIDADES DESARROLLADAS** |
| --- |
| **1. Github** [https://github.com/robyserpa/Practica04-Mi-Agenda-Telef-nica](https://github.com/robyserpa/Practica04-Mi-Agenda-Telef-nica) |
| --- |
| **2. Base de Datos**![](RackMultipart20200601-4-i6yczr_html_13011b97ba48c7e5.png)




 |
| --- |
| **3.**  **Agregar roles a la tabla usuario. Un usuario puede tener un rol de &quot;admin&quot; o &quot;user&quot;**![](RackMultipart20200601-4-i6yczr_html_2948c908a4cbab04.png) |
| --- |
| **4.**  **Los usuarios &quot;anónimos&quot; pueden registrarse en la aplicación a través de un formulario de creación de cuentas**![](RackMultipart20200601-4-i6yczr_html_9681e3431720f94b.png) |
| --- |
| **5.**  **Los usuarios &quot;anónimos&quot; listar los números de teléfono de un usuario usando su número de cédula o correo electrónico**![](RackMultipart20200601-4-i6yczr_html_9782c36c0775c2d8.png) ![](RackMultipart20200601-4-i6yczr_html_bb6d70c20477624e.png) |
| --- |
| **6.**  **• Los usuarios &quot;anónimos&quot; podrá llamar o enviar un correo electrónico desde el sistema usando aplicaciones externas** Para llamadas usando aplicaciones externas hacer click en el número de teléfono. ![](RackMultipart20200601-4-i6yczr_html_161a0a14cec89bb1.png) Para enviar correo usando aplicaciones externas hacer click en el correo del usuario. ![](RackMultipart20200601-4-i6yczr_html_d497e152744c7be5.png)
 |
| --- |
| **7.**  **Un usuario puede iniciar sesión usando su correo y contraseña**![](RackMultipart20200601-4-i6yczr_html_ce03bdee9d799ff.png) |
| --- |
| **8. Privilegios**  **a. Los usuarios con rol de &quot;admin&quot; pueden: agregar, modificar, eliminar, buscar, listar y cambiar la contraseña de cualquier usuario de la base de datos.**![](RackMultipart20200601-4-i6yczr_html_4d30b51adf31badf.png)



**b. Los usuarios con rol de &quot;user&quot; pueden modificar, eliminar y cambiar la contraseña de su usuario**![](RackMultipart20200601-4-i6yczr_html_50a2fa1099388aad.png) **c. Los usuarios con rol de &quot;user&quot; pueden agregar, modificar, eliminar, buscar y listar sus teléfonos.**![](RackMultipart20200601-4-i6yczr_html_b30ec2e41c9549b.png)
 |
| --- |
| **9.**  **Los datos siempre deberán ser validados cuando se trabaje a través de formularios.**![](RackMultipart20200601-4-i6yczr_html_51c800fceb55d84a.png) |
| --- |
| **10.**  **Un usuario &quot;anónimo&quot;, es decir, un usuario que no ha iniciado sesión puede acceder únicamente a los archivos de la carpeta pública**![](RackMultipart20200601-4-i6yczr_html_fb6d3d6dbe73d76e.png) |
| --- |
| **11.**  **Se debe generar una página con la experiencia e interfaz de usuario apropiada, como la que se muestra a continuación:**![](RackMultipart20200601-4-i6yczr_html_a4eb51fac8fca26.png) |
| --- |
| **12. Sentencias SQL utilizadas** En el buscador general busca un usuario según se ingrese su cedula o su correo.**$sql = &quot;SELECT \* FROM usuario WHERE (usu\_cedula=&#39;$texto&#39; or usu\_correo=&#39;$texto&#39;) and usu\_eliminado=&#39;N&#39;&quot;;**login utiliza el usuario y la contraseña cifrada con md5.**$sql = &quot;SELECT \* FROM usuario WHERE usu\_usuario = &#39;$usuario&#39; and usu\_password = MD5(&#39;$contrasena&#39;) and usu\_eliminado=&#39;N&#39;&quot;;**Creación de usuarios.**$sql = &quot;INSERT INTO usuario VALUES (0, &#39;$cedula&#39;, &#39;$nombres&#39;, &#39;$apellidos&#39;, &#39;$privilegios&#39;, &#39;$tipo\_telefono&#39;, &#39;$telefono&#39;,**    **&#39;$operadora&#39;, &#39;$usuario&#39;, &#39;$correo&#39;, MD5(&#39;$contrasena&#39;))&quot;;**Modificación de un usuario$sql = &quot;UPDATE usuario &quot; .        &quot;SET usu\_cedula = &#39;$cedula&#39;, &quot; .        &quot;usu\_nombres = &#39;$nombres&#39;, &quot; .        &quot;usu\_apellidos = &#39;$apellidos&#39;, &quot; .        &quot;usu\_tipo\_telefono = &#39;$tipo\_telefono&#39;, &quot; .         &quot;usu\_telefono = &#39;$telefono&#39;, &quot; .        &quot;usu\_operadora = &#39;$operadora&#39;, &quot; .        &quot;usu\_usuario = &#39;$usuario&#39;, &quot; .        &quot;usu\_correo = &#39;$correo&#39; &quot; .        &quot;WHERE usu\_codigo = $codigo&quot;;

Modificación de un admin.$sql = &quot;UPDATE usuario &quot; .        &quot;SET usu\_cedula = &#39;$cedula&#39;, &quot; .        &quot;usu\_nombres = &#39;$nombres&#39;, &quot; .        &quot;usu\_apellidos = &#39;$apellidos&#39;, &quot; .        &quot;usu\_privilegios = &#39;$privilegios&#39;, &quot; .        &quot;usu\_tipo\_telefono = &#39;$tipo\_telefono&#39;, &quot; .         &quot;usu\_telefono = &#39;$telefono&#39;, &quot; .        &quot;usu\_operadora = &#39;$operadora&#39;, &quot; .        &quot;usu\_usuario = &#39;$usuario&#39;, &quot; .        &quot;usu\_correo = &#39;$correo&#39; &quot; .        &quot;usu\_eliminado = &#39;$eliminado&#39; &quot; .        &quot;WHERE usu\_codigo = $codigo&quot;;

Cambio de contraseña de un usuario.$sqlContrasena1 = &quot;SELECT \* FROM usuario where usu\_codigo=$codigo and        usu\_password=MD5(&#39;$contrasena1&#39;)&quot;;

se verifica que la contraseña antigua sea la misma y se agrega la nueva.$sqlContrasena2 = &quot;UPDATE usuario &quot; .            &quot;SET usu\_password = MD5(&#39;$contrasena2&#39;) &quot; .            &quot;WHERE usu\_codigo = $codigo&quot;;

Para cambiar la contraseña de cualquier usario por medio de un admin no es necesario la anterior contraseña.$sqlContrasena1 = &quot;UPDATE usuario &quot; .        &quot;SET usu\_password = MD5(&#39;$contrasena1&#39;) &quot; .        &quot;WHERE usu\_codigo = $codigo&quot;;
 |
| --- |
| **13. Diagrama E – R**

| Usuario |
| --- |
| usu\_codigousu\_nombresusu\_apellidosusu\_privilegiosusu\_tipo\_telefonousu\_telefonousu\_operadorausu\_usuariousu\_correousu\_passwordusu\_eliminado |
| --- |



 |
| --- |
| **RESULTADO(S) OBTENIDO(S)**:La configuracion y uso de una base de datos en html usando php. |
| --- |
| **CONCLUSIONES** :La comprensión del funcionamiento y la importancia de una base de datos en la web. |
| --- |
| **RECOMENDACIONES** :Revisar las imágenes y el link de Github. |
| --- |

_ **Nombre de estudiante** _ **: Roberto Serpa**

![](RackMultipart20200601-4-i6yczr_html_5520b8a61bd3af6b.png)

_ **Firma de estudiante** _ **:**

**Resolución CS N° 076-04-2016-04-20**
