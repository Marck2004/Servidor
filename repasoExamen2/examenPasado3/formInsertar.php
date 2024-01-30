

<!-- todo lo relacionado con la gestion del formulario y del fichero adjunto deber�s rellanarlo tu-->

<HTML LANG="es">

<HEAD>
   <TITLE>Solicitud de vivenda</TITLE>
   <LINK    />
   <style>
	.red{
		color:red;
	}
   </style>
</HEAD>

<BODY>


<H1>Inserci�n de vivienda</H1>

<P>Introduzca los datos de la vivienda:</P>
<?php
	include("funciones.php");
	manejarSesion();
?>
<form action="insertar.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" VALUE="1000000">
<P><LABEL>Tipo de vivienda:</LABEL>
<SELECT NAME="tipo">

	<OPTION>Piso
	<OPTION>Adosado
	<OPTION>Chalet
	<OPTION>Casa

</SELECT></P>
<?php
	if(isset($_GET["errorTipo"]) && $_GET["errorTipo"] == 1){
		manejarError("El campo tipo de la insercion esta vacio");
		print "<p class='red'>El campo tipo esta vacio</p>";
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
		manejarError("El campo zona de la insercion esta vacio");
		print "<p class='red'>El campo zona esta vacio</p>";
	}
?>
<P><LABEL>Direccion:</LABEL>
<INPUT TYPE="TEXT" NAME="direccion"

>
</P>
<?php
	if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
		manejarError("El campo direccion de la insercion esta vacio");
		print "<p class='red'>El campo direccion esta vacio</p>";
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
	if(isset($_GET["errorDormitorio"]) && $_GET["errorDormitorio"] == 1){
		manejarError("El campo dormitorio de la insercion esta vacio");
		print "<p class='red'>El campo dormitorio esta vacio</p>";
	}
?>
<P><LABEL>Precio:</LABEL>
	<INPUT TYPE="TEXT" NAME="precio"

> &euro;
</P>
<?php
	if(isset($_GET["errorPrecio"]) && $_GET["errorPrecio"] == 1){
		manejarError("El campo precio de la insercion esta vacio");
		print "<p class='red'>El campo precio esta vacio</p>";
	}
?>
<P><LABEL>Tamaño:</LABEL>
	<INPUT TYPE="TEXT" NAME="tamano"

> metros cuadrados
</P>
<?php
	if(isset($_GET["errorTamano"]) && $_GET["errorTamano"] == 1){
		manejarError("El campo tamaño de la insercion esta vacio");
		print "<p class='red'>El campo tamaño esta vacio</p>";
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
		manejarError("El campo extras de la insercion esta vacio");
		print "<p class='red'>El campo extras esta vacio</p>";
	}
?>
<P><LABEL>Foto:</LABEL>

	<input type="file" name="foto" id="foto">

</P>

<P><LABEL>Observaciones:</LABEL>
<TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA></P>

<P><INPUT TYPE="submit" NAME="enviar" VALUE="Insertar vivienda"></P>

</form>
<?php

if(isset($_GET["encontrado"]) && $_GET["encontrado"] == 1){
	manejarError("El registro ya esta en la bbdd");
	print "<p class='red'>El registro ya esta en la bbdd</p>";
}

?>
<p><a href="links.php">Volver al menu</a></p>
</BODY>
</HTML>
