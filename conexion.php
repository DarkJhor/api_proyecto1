<?php

//Conectando a la base de datos
$con = new mysqli('localhost','root','','agencia');


//comprobacion de la conexion.
if ($con) {
	echo "conectado a la base de datos ";
}else{
	echo "error en conectar a la base de datos";
}


 ?>