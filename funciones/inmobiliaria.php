<?php

function img_caracteristicas($ruta){
	if($ruta=='s') 	{$ruta='"fotos/ok.jpg" alt="si" ';}
	else if($ruta=='n')	{$ruta='"fotos/aspa.jpg" alt="no" ';} 
	else {$ruta='"fotos/guion.jpg" alt="sin informacion" ';} 
	return $ruta;
}

function img_fotos($rutaFoto){
	if ($rutaFoto==null) 
		{$rutaFoto='sinimagen.gif';}
	else {$rutaFoto='inmuebles/'.$rutaFoto;}
		
	return $rutaFoto;
}
function img_fotos_p($rutaFoto){
	if ($rutaFoto==null) 
		{$rutaFoto='sinimagen_p.gif';}
	else {$rutaFoto='inmuebles/miniaturas/'.$rutaFoto;}
		
	return $rutaFoto;
}

function precios($cadena) {

	$centenas='';
	$centenas_millar='';
	$millon='';

	$numeros=strlen($cadena);
	switch($numeros)
	{	
		case '5':
		$centenas=substr($cadena,0,2);
		$centenas_millar=substr($cadena,-3,3);
		$precio= $centenas . '.' . $centenas_millar;
		return $precio;
		break;
	
		case '6':
		$centenas=substr($cadena,0,3);
		$centenas_millar=substr($cadena,-3,3);
		$precio= $centenas . '.' . $centenas_millar;
		return $precio;
		break;
	
		case '7':	
		$centenas=substr($cadena,0,1);
		$centenas_millar=substr($cadena,-3,3);
		$millon=substr($cadena,-6,3);
		$precio= $centenas. '.' . $millon . '.' . $centenas_millar;
		return $precio;
		break;
	
		case '8':	
		$centenas=substr($cadena,0,2);
		$centenas_millar=substr($cadena,-3,3);
		$millon=substr($cadena,-6,3);
		$precio= $centenas. '.' . $millon . '.' . $centenas_millar;
		return $precio;
		break;
	}
}
/*
function ordenar($tipo,$localidad,$precio,$dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.gif" alt="ascendente" width="8"></a> <a href="inmobiliaria_resultados.php?campo=tipo DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>">){


inmobiliaria_resultados.php?campo=tipo&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.gif" alt="ascendente" width="8"></a> <a href="inmobiliaria_resultados.php?campo=tipo DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>">

$ruta="inmobiliaria_resultados.php?campo=";
	return $ruta;
}
?>*/