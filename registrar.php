<?php

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];

$conexion=mysqli_connect("localhost","root","","bdejemplo");

$consulta= "insert into cliente values($codigo,'$nombre',$edad,'$direccion')";

$resultado= mysqli_query($conexion,$consulta);

if($resultado)
{

    echo "Datos agregados correctamente";

}

else
{

    echo "Error al ingresar los datos";
}

mysqli_close($conexion);
