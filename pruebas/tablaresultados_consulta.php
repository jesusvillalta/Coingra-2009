<?php 
//--------------------pruebas------------------------------------------------
if(isset ($_POST))
{
echo '$_POST existe y es '.$_POST['tipos'].'<br />';
echo '$_POST["tipos"] existe y es '.$_POST['tipos'];
}
//----------------------fin pruebas-------------------------------------------
$orden=""; // Muestra los resultados de la sentencia SQL de forma ascendente.

if(isset ($_POST))
	{
	if($_POST['tipos']==all && $_POST['localidad']==all && $_POST['precio']==all && $_POST['dormitorios']==all && $_POST['m2']==all  && $_POST['garaje']!=s  && $_POST['ascensor']!=s)
		{
		$condicion="";
		echo '$_POST["tipos"] existe y es '.$_POST['tipos'];
		}
	else{
		$condicion="WHERE ";
		
		foreach ($_POST as $indice=>$valor){
		if($valor!='all' || $valor=='s'){
			if($indice=='precio' || $indice=='m2'){
					$condicion= "$condicion $indice $valor";}
			else{
				$condicion= "$condicion $indice = $valor";}
		}}
		echo $condicion;
		}
	}
 ?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>
