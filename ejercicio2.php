<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php
	echo "Escribe tu nombre";
	echo "<form><input type ='text' name='nombre' value=''></form></br>";

	echo "Escribe tu contraseña";
	echo "<form><input type ='password' name='contraseña' value=''></form></br>";

	echo "casilla de chequeo";
	echo "<form><input type ='checkbox' name='verificacion' value=''></form></br>";

	echo "<form><input type='radio' name='sexo' value='hombre'></form> HoMbrE";
	echo "<form><input type='radio' name='sexo' value='mujer'></form> MuJeR</br></br>";

	echo "<form><input type='submit' name='busqueda' value='Buscar'</form></br></br></br>";

	echo "<form><input type='reset' name='resetear' value='Resetear formulario'</form></br></br></br>";

	//no hace falta cerrar la etiqueta del formulario para que lo muestre?

	echo "<form><input type='file' name='insertarAdjunto'</form></br></br></br>";

	echo "<form><input type='image' name='insertearImagen' value='Enviamos la imagen?'</form></br></br></br>";

	echo "<form><input type='hidden' name='urlPrevia' value='articulo/primero.html'</form>"; //?¿?¿campo oculto para añadir info oculta en el formulario...?

	echo "<form><input type='button' name='guardar' value='Guardar cambios'</form>(si la página contiene javascript, estos botones se pueden programar para realizar cualquier tarea compleja cuando se pulsa sobre ellos)</form>";





?>
	
</body>
</html>