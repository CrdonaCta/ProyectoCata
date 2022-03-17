<?php //Abrimos php
	//hacemos la conexion para la base de datos:
	$conectar=@mysql_connect('localhost', 'root', '');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Encontro El Servidor";
	}else{
		$baseDedatos=@mysql_select_db('numero hectareas');
	//verificamos la base de datos
		if(!$baseDedatos){
			echo"No Se Encontro La Base De Datos";
		}
	}
$nombre=$_POST['nombre']
$hectareas=$_POST['numero de hectareas']	
	
	$sql="SELECT * FROM datos"; (
	'$nombre'
	'$hectareas'
	)

	$ejecutar=mysql_query($sql);
	
	$datos=mysql_fetch_array($ejecutar);
	
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>Nombre</th>";
	echo "<th align='center'><b>Hectareas</th>";
	echo"</tr>";
	for($i=0; $i<$datos; $i++){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
		echo"</tr>";
		$datos=mysql_fetch_array($ejecutar);
	}
	echo"</table>";
?>