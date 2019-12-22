<?php
include 'accesoadatos.php';
	//session_start();
var_dump("hola")die();
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); //obtener consulta
			$consulta =$objetoAccesoDato->RetornarConsulta("select nombre  , clave  from usuario"); //crear consulta
			$consulta->execute();	//ejecutar
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		//traer al formato esperado
			//var_dump($datos);
			foreach ($datos as $usuario) 
			{
			var_dump($usuario);
				//echo ($usuario["nombre"]);
				//echo "<br>";
				//echo($usuario["clave"]);
				//echo "<br>";
			}
	
?>