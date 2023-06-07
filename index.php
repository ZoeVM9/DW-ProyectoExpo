<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="shortcut icon" href="https://img.icons8.com/?size=512&id=OWi1FRGoDmTl&format=png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Raleway:wght@800&display=swap" rel="stylesheet">
<style>

body{
	background-image: url("img/prueba4.gif");
	font-family: 'Raleway', sans-serif;
}

p{
	color: white;
	font-size: 60px;
	margin-left: 120px;
}
input{
	background-color: goldenrod;
	font-size: 25px;
	color: white;
	font-family: 'Quicksand', sans-serif;
border-radius: 15px;
margin-left: 120px;
border-color: goldenrod;
width: 200px;
}
input:hover {
    background-color:#BE701D;
    text-decoration:none;
	border-color: #BE701D;
}

</style>

</head>
<body>
	<main>
		<form action="registro.php" method="POST" class="formulario" id="formulario" >
			<table>
				
			<tr>
					<td colspan=10 width=100% align="center">
					<br><br><br>
					<p>VOYAGE</p> 

				</td>	

				
			</tr>	
						
			<!-- <td colspan=5 >Grupo: Usuario 
				<div class="formulario__grupo" id="grupo__usuario">
					<label for="usuario" class="formulario__label">Usuario</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="user" id="usuario" placeholder="Usuario">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					</div>
		</td>
		</tr>
				
		<tr>
		<td colspan=5>
			
				<!-- Grupo: Contraseña 
				<div class="formulario__grupo" id="grupo__password">
					<label for="password" class="formulario__label">Contraseña</label>
					<div class="formulario__grupo-input">
						<input type="password" class="formulario__input" name="pass" id="password" placeholder="Contraseña">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
				</div>
			 </td>
	
	
		</tr>
		-->
	<tr>
		<td colspan="5">
			<div class="formulario__grupo">
				<br><br><br><br>
				<input type="submit"  value="Registrate" class="formulario__btn">
			</div>
		</td>	
	</tr>
			<!-- Grupo: Terminos y Condiciones -->
			<!--<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
			<br>
		-->
		
		</form>
	</table>
	</main>


	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>