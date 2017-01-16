<?php

	function conexionBD(){
		$user= "root";
		$pass= "root";
		$host= "localhost";
		$port='3306';
		$db= "gc";
		$conexion = new PDO('mysql:host=localhost; dbname=gc;', $user, $pass);
		//$conexion = new PDO('mysql:host=192.168.115.150;dbname=moviles;', $user,$pass);
		return $conexion;
	}

	function mostrarPreguntas(){
    	$filas = null;
    	//llamando a la conexion a la base de datos
        $conexion =conexionBD();
        
        $sql = "select * from preguntas";
        
        $statement = $conexion->prepare($sql);
        
        $statement->execute();
        //devuelve array ya echo
        $filas = $statement->fetchAll();
        /*
        while($resultado = $statement->fetchAll() ) {
            $filas[] = $resultado;
        }
        
		*/
        return $filas;
	}
	

?>