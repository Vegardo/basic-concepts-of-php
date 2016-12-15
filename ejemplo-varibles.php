<?php
	#variable de tipo numerica
	$numeroCinco = 5;
	echo "$numeroCinco<br>";
	echo "Mas texto sin concatenar: $numeroCinco<br>";

	#variable de tipo string (texto)
	$palabra = "palabra";
	echo "varible de tipo texto $palabra<br>";

	#varible boleana con valor true que es igual a 1
	$boleana = true;
	echo "Esto es una variable boleana con valor true significa que vale uno: $boleana<br>";

	#varible boleana con valor false que es igual a 0 y por tanto no imprime nada
	$boleana = false;
	echo "Esto es una variable boleana con valor false significa que vale cero: $boleana<br>";

	#variable de tipo arreglo muestra la posición 0 "azul"
	$colores = array("azul", "amarillo");
	echo "Esto es una variable de tipo arreglo: $colores[0]<br>";

	#variable de tipo arreglo muestra la posición 1 "amariilo"
	$colores = array("azul", "amarillo");
	echo "Esto es una variable de tipo arreglo: $colores[1]<br>";

	#variable de tipo arreglo con propiedades
	$colores = array("color1" =>"rojo","color2"=>"rosa");
	echo "varible arreglo con propiedades: $colores[color1]<br>";

	#variable de tipo arreglo con propiedades
	$colores = array("color1" =>"rojo","color2"=>"rosa");
	echo "varible arreglo con propiedades: $colores[color2]<br>";

	#varible de tipo objeto con valor 0
	$color = (object)["color1"=>"verde","color2"=>"naranja"];
	echo "esto en un avarible de tipo objeto: $color->color1<br>";

	#varible de tipo objeto con valor 1
	$color = (object)["color1"=>"verde","color2"=>"naranja"];
	echo "esto en un avarible de tipo objeto: $color->color2<br>";
?>