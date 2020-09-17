<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php
	echo 	"<form>
			<ins><h3>VAMOS A REALIZAR UN FORMULARIO DE PRUEBA</h3></ins></br>
			
			Introduzca su nombre de usuario ó email: &nbsp&nbsp 
			<input type='text' name='nombre' value=''> </br></br></br>
			
			Introduzca su contraseña: &nbsp&nbsp 
			<input type='password' name='contraseña' value=''></br></br></br>

			Si es diestro marque la siguiente casilla &nbsp <input type ='checkbox' name='verificacion' value=''></br>
			Si es zurdo marque la siguiente casilla &nbsp&nbsp <input type ='checkbox' name='verificacion' value=''></br></br></br>

			Por favor, seleccione un sexo:</br></br>
			<input type='radio' name='sexo' value='hombre'> HoMbrE</br>
			<input type='radio' name='sexo' value='mujer'> MuJeR</br></br>

			Si sus datos son correctos pulse 'Continuar' &nbsp&nbsp 
			<input type='submit' name='boton de confirmacion' value='Continuar'</br></br></br>

			Si quiere resetear el formulario pulse 'Resetar formulario' &nbsp&nbsp 
			<input type='reset' name='resetear' value='Resetear formulario'</br></br></br>

			//<em>no hace falta cerrar la etiqueta del formulario para que lo muestre?</em></br>
			//<em>como pondría los comentarios para que no fuesen visibles? debería sacarlos del echo y comenzar un echo nuevo?</em></br></br></br>
			
			Adjunte a continuación una foto suya actualizada por favor &nbsp&nbsp 
			<input type='file' name='insertarAdjunto'</br></br></br>

			<strong>Si está seguro de enviar la foto seleccionada, confirme por favor </strong>&nbsp&nbsp 
			<input type='image' name='insertarImagen' value='Enviar la imagen'></br></br></br>

			
			&nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp  &nbsp&nbsp 
			<input type='button' name='guardar' value='Guardar cambios y enviar formulario'>(si la página contiene javascript, estos botones se pueden programar para realizar cualquier tarea compleja cuando se pulsa sobre ellos)
			</form>";
	
	echo "<form><input type='hidden' name='urlPrevia' value='articulo/primero.html'</form>"; //?¿?¿campo oculto para añadir info oculta en el formulario...?




?>
	
</body>
</html>