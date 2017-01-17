<?php 
	//$name = $_POST['name']='';
	//$pass = $_POST['pass']='';

	//if (!isset($_POST['login'])) {
	//	require_once "resources/login.php";
	//}
		//if (isset($_POST['name']) && isset($_POST['pass'])) {
		
			//if ($_POST['name']=='masoja' && $_POST['pass']=='masoja'){
			
				echo "<h3>Panel de administrador</h3>";
				echo "
				<table>
					<form action=''>
						<tr>
							<th><label>Registrar experto</label></th>
						</tr>	<tr>
							<td><label>Nombre</label></td>
							<td><input type='text' name='nameExpert' value=''></td>
						</tr>
						<tr>
							<td><label>Contraseña</label></td>
							<td><input type='password' name='passExpert' value=''></td>
						</tr>
						<tr>
							<td><label>Repetir contraseña</label></td>
							<td><input type='password2' name='passExpert2'></td>
						</tr>	
						<tr>
							<td><label>Email</label></td>
							<td><input type='text' name='email'></td>
						</tr>	
						<tr>
							<td>
								<label>Experto en:</label>
							</td>
							<td>
								<input type='checkbox' name='correcta' value='Historia'>Historia
								<input type='checkbox' name='correcta' value='Geografia'>Geografia
								<input type='checkbox' name='correcta' value='Literatura'>Literatura
								<input type='checkbox' name='correcta' value='Ciencia'>Ciencia
								<input type='checkbox' name='correcta' value='Deportes'>Deportes
							</td>
						</tr>
						<tr>
							<td><input type='submit' name='registrar' value='Registrar'><td></td>
						</tr>
					</form>
				</table>	
			";
			
			//}
		//}
?>