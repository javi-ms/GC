<?php
	session_start();
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
	
	function addPreguntas(){

		$conexion =conexionBD();

		$sqlInsertar ="insert into preguntas(pregunta, objeto, tipoObjeto, categoria, nivel) values(:pregunta, :objeto, :tipoObjeto, categoria, nivel)";
		
		//Preparo la consulta para evitar el SQLInyection con el metodo prepare
    	$statement = $conexion->prepare($sql);

    	//Bindeamos los parametros para sustituir los parametros con : por su valor
		$statement->bindParam(":pregunta", $pregunta);
		$statement->bindParam(":objeto", $objeto);
		$statement->bindParam(":tipoObjeto", $tipoObjeto);
		$statement->bindParam(":categoria", $categoria);
		$statement->bindParam(":nivel", $nivel);

		if (!$statement) {
			return "Error al registrar los datos";
		}else{
			$statement->execute();
			return "Se han registrado correctamente";
		}
	}

		
?>