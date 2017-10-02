<?php 
session_start();
if(isset($_SESSION['Nombre'])){

 ?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="tesis.php">TESIS TSU</a></li>
  <li><a href="pdf.php">PDF</a></li>
  <li style="float:right"><a href="logout.php">Cerrar Sesion</a></li>
</ul>
	<?php 
	if(isset($_SESSION['Nombre'])&& $_SESSION['rol']==1){
	 ?>
	<h1>Introduccion para Administrador</h1>

	El Administrador de dispositivos proporciona una vista gráfica del hardware que está instalado en el equipo. Todos los dispositivos se comunican con Windows mediante un software denominado controlador de dispositivo. Puede usar el Administrador de dispositivos para instalar y actualizar los controladores para los dispositivos de hardware, modificar la configuración de hardware de estos dispositivos y solucionar problemas.
Usos del Administrador de dispositivos
Puede usar el Administrador de dispositivos para:
Determinar si el hardware del equipo funciona correctamente. 

Cambiar la configuración de hardware.

Identificar los controladores de dispositivo cargados para cada dispositivo y obtener información acerca de cada controlador de dispositivo. 

Cambiar la configuración avanzada y las propiedades de los dispositivos. Instalar controladores de dispositivo actualizados. 

Habilitar, deshabilitar y desinstalar dispositivos. 

Revertir a la versión anterior de un controlador. 

Ver los dispositivos según el tipo, la conexión al equipo o los recursos que usan. 

Mostrar u ocultar dispositivos ocultos cuya visualización no es importante, pero que pueden ser necesarios para la solución avanzada de problemas.

El Administrador de dispositivos se suele usar para comprobar el estado del hardware y actualizar los controladores de dispositivos del equipo. Los usuarios avanzados con conocimientos del hardware del equipo también pueden usar las características de diagnóstico del Administrador de dispositivos para resolver conflictos entre dispositivos y cambiar la configuración de recursos.
Normalmente, no será necesario usar el Administrador de dispositivos para cambiar la configuración de recursos, ya que el sistema asigna automáticamente los recursos durante la instalación del hardware.
Puede usar el Administrador de dispositivos para administrar los dispositivos sólo en un equipo local. En un equipo remoto, el Administrador de dispositivos únicamente funciona en modo de sólo lectura, permitiendo ver la configuración de hardware del equipo pero no cambiarla.
	<?php 
	}else{ ?>
	
	<h1>Introduccion para usuario</h1>

	<?php	}	 ?>
</body>
</html>

<?php 
}else{
	header('Location:index.html');
}
 

 ?>
