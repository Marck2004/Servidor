

<!-- todo lo relacionado con la gestion del formulario y del fichero adjunto deber�s rellanarlo tu-->

<HTML LANG="es">

<HEAD>
   <TITLE>Solicitud de vivenda</TITLE>
   <LINK    />
   <style>
	.error{
		color:red;
	}
   </style>
</HEAD>

<BODY>
<?php
	include("funciones.php");
	comprobarSesion();
?>

<H1>Inserci�n de vivienda</H1>

<P>Introduzca los datos de la vivienda:</P>

<form action="insertar.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="100000000">
<P><LABEL>Tipo de vivienda:</LABEL>
<SELECT NAME="tipo">

	<OPTION>Piso
	<OPTION>Adosado
	<OPTION>Chalet
	<OPTION>Casa

</SELECT></P>
<?php
	if(isset($_GET["errorTipo"]) && $_GET["errorTipo"] == 1){
		captarErrores("Campo vacio");
		print "<p class='error'>Campo vacio</p>";
	}
?>
<P><LABEL>Zona:</LABEL>
<SELECT NAME="zona">

	<OPTION>Centro
	<OPTION>Nervion
	<OPTION>Triana
	<OPTION>Aljarafe
	<OPTION>Macarena

</SELECT></P>
<?php
	if(isset($_GET["errorZona"]) && $_GET["errorZona"] == 1){
		captarErrores("Campo vacio");
		print "<p class='error'>Campo vacio</p>";
	}
?>
<P><LABEL>Direccion:</LABEL>
<INPUT TYPE="TEXT" NAME="direccion"

>
</P>
<?php
	if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
		captarErrores("Campo vacio");
		print "<p class='error'>Campo vacio</p>";
	}
?>
<P><LABEL>Numero de dormitorios:</LABEL>

	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='1'>1
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='2'>2
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='3' CHECKED>3
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='4'>4
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='5'>5

</P>
<?php
	if(isset($_GET["errorDormitorios"]) && $_GET["errorDormitorios"]==1){
		captarErrores("Campo vacio");
		print "<p class='error'>Campo vacio</p>";
	}
?>
<P><LABEL>Precio:</LABEL>
	<INPUT TYPE="TEXT" NAME="precio"

> &euro;
</P>
<?php
	if(isset($_GET["errorPrecio"]) && $_GET["errorPrecio"]==1){
		captarErrores("Campo vacio");
		print "<p class='error'>Campo vacio</p>";
	}
?>
<P><LABEL>Tamaño:</LABEL>
	<INPUT TYPE="TEXT" NAME="tamano"

> metros cuadrados
</P>
<?php
	if(isset($_GET["errorTamaño"]) && $_GET["errorTamaño"]==1){
		captarErrores("Campo vacio");
		print "<p class='error'>Campo vacio</p>";
	}
?>
<P><LABEL>Extras (marque los que procedan):</LABEL>

<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Piscina'>Piscina
<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Jardin'>Jardin
<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Garaje'>Garaje
<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Sauna'>Sauna

</P>
<?php
	if(isset($_GET["errorExtras"]) && $_GET["errorExtras"]==1){
		captarErrores("Campo vacio");
		print "<p class='error'>Campo vacio</p>";
	}
?>
<P><LABEL>Foto:</LABEL>

	<INPUT type='file' value='examinar' name='foto'>
</P>
<?php
	if(isset($_GET["formSize"]) && $_GET["formSize"]==1){
		captarErrores("Supera la capacidad del formulario");
		print "<p class='error'>Supera la capacidad del formulario</p>";
	}
	if(isset($_GET["phpSize"]) && $_GET["phpSize"]==1){
		captarErrores("Supera la capacidad del php.ini");
		print "<p class='error'>Supera la capacidad del php.ini</p>";
	}
?>
<P><LABEL>Observaciones:</LABEL>
<TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA></P>

<P><INPUT TYPE="submit" NAME="insertar" VALUE="Insertar vivienda"></P>

</form>
<p><a href="links.php">Volver al menu</a></p>
<?php
	if(isset($_GET["encontrado"]) && $_GET["encontrado"]==1){
		captarErrores("Registro ya insertado");
		print "<p class='error'>Ese registro ya esta insertado</p>";
	}
?>

</BODY>
</HTML>
