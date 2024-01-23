

<!-- todo lo relacionado con la gestion del formulario y del fichero adjunto deber�s rellanarlo tu-->

<HTML LANG="es">

<HEAD>
   <TITLE>Solicitud de vivenda</TITLE>
   <LINK    />
   <style>
	.errores{
		color:red;
	}
   </style>
</HEAD>

<BODY>

<?php
include("funciones.php");
	session_start();
	if(isset($_SESSION["usuario"])){

?>
<H1>Inserci�n de vivienda</H1>

<P>Introduzca los datos de la vivienda:</P>

<form action="insertar.php" method="post" enctype="multipart/form-data">

<P><LABEL>Tipo de vivienda:</LABEL>
<SELECT NAME="tipo">

	<OPTION>Piso
	<OPTION>Adosado
	<OPTION>Chalet
	<OPTION>Casa

</SELECT></P>

<P><LABEL>Zona:</LABEL>
<SELECT NAME="zona">

	<OPTION>Centro
	<OPTION>Nervion
	<OPTION>Triana
	<OPTION>Aljarafe
	<OPTION>Macarena

</SELECT></P>

<P><LABEL>Direccion:</LABEL>
<INPUT TYPE="TEXT" NAME="direccion">
</P>
<?php
	if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
		print "<p class='errores'>Campo no introducido</p>";
		manejarError("Campo direccion no introducido");
	}
?>

<P><LABEL>Numero de dormitorios:</LABEL>

	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='1'>1
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='2'>2
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='3' CHECKED>3
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='4'>4
	<INPUT TYPE='radio' NAME='ndormitorios' VALUE='5'>5

</P>

<P><LABEL>Precio:</LABEL>
	<INPUT TYPE="TEXT" NAME="precio"

> &euro;
</P>
<?php
	if(isset($_GET["errorPrecio"]) && $_GET["errorPrecio"] == 1){
		print "<p class='errores'>Campo no introducido</p>";
		manejarError("Campo precio no introducido");
	}
?>

<P><LABEL>Tamaño:</LABEL>
	<INPUT TYPE="TEXT" NAME="tamano"

> metros cuadrados
</P>
<?php
	if(isset($_GET["errorTamaño"]) && $_GET["errorTamaño"] == 1){
		print "<p class='errores'>Campo no introducido</p>";
		manejarError("Campo tamaño no introducido");
	}
?>

<P><LABEL>Extras (marque los que procedan):</LABEL>

<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Piscina'>Piscina
<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Jardin'>Jardin
<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Garaje'>Garaje
<INPUT TYPE='checkbox' NAME='extras[]' VALUE='Sauna'>Sauna

</P>
<?php
	if(isset($_GET["errorExtras"]) && $_GET["errorExtras"] == 1){
		print "<p class='errores'>Campo no introducido</p>";
		manejarError("Campo extras no introducido");
	}
?>
<P><LABEL>Foto:</LABEL>

	<input type="file" name="foto" id="foto">

</P>
<?php
	if(isset($_GET["errorGrande"]) && $_GET["errorGrande"] == 1){
		print "<p class='errores'>La foto supera la capacidad</p>";
		manejarError("La foto supera la capacidad");
	}
	if(isset($_GET["errorGrandeform"]) && $_GET["errorGrandeform"] == 1){
		print "<p class='errores'>La foto supera la capacidad del formulario</p>";
		manejarError("La foto supera la capacidad del formulario");
	}
	if(isset($_GET["errorSubida"]) && $_GET["errorSubida"] == 1){
		print "<p class='errores'>La foto supera la capacidad del formulario</p>";
		manejarError("La foto supera la capacidad del formulario");
	}
?>
<P><LABEL>Observaciones:</LABEL>
<TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA></P>

<P><INPUT TYPE="submit" NAME="insertar" VALUE="Insertar vivienda"></P>

	</form>
	
<?php
print "<a href='links.php'>Volver al menu</a>";
if(isset($_GET["igualdad"]) && $_GET["igualdad"] == 1){
	print "<p class='errores'>Campo existente</p>";
	manejarError("Campo eexistente");
}
}else{
	header("location:index.php?error=1");
}
?>
</BODY>
</HTML>
