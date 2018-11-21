<?php
/*variables*/
$usuario=$_POST['usuario'];
$password=$_POST['password'];
/*conexion a bbdd*/
$conexion=mysqli_connect('localhost','root','','tienda_online');
if(!$conexion){
	echo "Error al conectar a la BBDD.";
}
else{
	echo "TODO OK";
}
/*sql*/
$sql="Select * from usuario where usuario='$usuario' and password='$password'";
$consulta=mysqli_query($conexion, $sql);
$fil=mysqli_num_rows($consulta);
echo $fil;
/*cerrar bbdd cnexion*/
mysqli_close($conexion);
?>