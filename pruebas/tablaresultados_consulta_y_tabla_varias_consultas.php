<?php require_once('../Connections/con1.php'); ?>
<?php

//--------------------pruebas------------------------------------------------
/*if(isset ($_POST))
{
echo '$_POST existe y es '.$_POST['tipos'].'<br />';
echo '$_POST["tipos"] existe y es '.$_POST['tipo'];
}*/
//----------------------fin pruebas-------------------------------------------
$orden=""; // Muestra los resultados de la sentencia SQL de forma ascendente.
$varias_condiciones='no';
/* ejemplo $orden="ORDER BY precio DESC";*/
if(isset ($_POST))
	{
		if($_POST['tipo']==all && $_POST['localidad']==all && $_POST['precio']==all && $_POST['dormitorios']==all && $_POST['m2_construidos']==all  && $_POST['garaje']!=s  && $_POST['ascensor']!=s)
			{
			$condicion="";
			echo 'condicion nula';
			}
			else{
				$condicion="WHERE ";
		
				foreach ($_POST as $indice=>$valor){
					if($valor!='all' || $valor=='s'){
						if($indice=='precio' || $indice=='m2_construidos'){
							if($varias_condiciones==no){
								$condicion= "$condicion $indice $valor";}
							else{$condicion= "$condicion and $indice $valor";}
							
							$varias_condiciones='si';
						}
						else{
							if($varias_condiciones==no){
								$condicion= "$condicion $indice = '$valor'";}
							else{
								$condicion= "$condicion and $indice = '$valor'";}
								
							$varias_condiciones='si';
						}
					}								
				}
				echo $condicion;
			}
	}	
//-------------------------------DREAMWEAVER ----------------------------------------
$maxRows_resultados = 5;
$pageNum_resultados = 0;
if (isset($_GET['pageNum_resultados'])) {
  $pageNum_resultados = $_GET['pageNum_resultados'];
}
$startRow_resultados = $pageNum_resultados * $maxRows_resultados;

mysql_select_db($database_con1, $con1);
$query_resultados = "SELECT tipo, dormitorios, m2_construidos, precio, provincia, localidad, zona_o_barrio FROM inmuebles $condicion $orden";

/*$query_resultados = "SELECT tipo, dormitorios, m2_construidos, precio, provincia, localidad, zona_o_barrio FROM inmuebles where tipo='piso' and precio between 200000 and 250000 and localidad='atarfe'";*/
/*?>$query_resultados = "SELECT tipo, dormitorios, m2_construidos, precio, provincia, localidad, zona_o_barrio FROM inmuebles where precio between 100000 and 200000 tipo='piso'";<?php */
	echo $query_resultados;

$query_limit_resultados = sprintf("%s LIMIT %d, %d", $query_resultados, $startRow_resultados, $maxRows_resultados);
$resultados = mysql_query($query_limit_resultados, $con1) or die(mysql_error());
$row_resultados = mysql_fetch_assoc($resultados);

if (isset($_GET['totalRows_resultados'])) {
  $totalRows_resultados = $_GET['totalRows_resultados'];
} else {
  $all_resultados = mysql_query($query_resultados);
  $totalRows_resultados = mysql_num_rows($all_resultados);
}
$totalPages_resultados = ceil($totalRows_resultados/$maxRows_resultados)-1;
 
 ?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table border="1">
  <tr>
    <td>tipo</td>
    <td>dormitorios</td>
    <td>m2_construidos</td>
    <td>precio</td>
    <td>provincia</td>
    <td>localidad</td>
    <td>zona_o_barrio</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_resultados['tipo']; ?></td>
      <td><?php echo $row_resultados['dormitorios']; ?></td>
      <td><?php echo $row_resultados['m2_construidos']; ?></td>
      <td><?php echo $row_resultados['precio']; ?></td>
      <td><?php echo $row_resultados['provincia']; ?></td>
      <td><?php echo $row_resultados['localidad']; ?></td>
      <td><?php echo $row_resultados['zona_o_barrio']; ?></td>
    </tr>
    <?php } while ($row_resultados = mysql_fetch_assoc($resultados)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($resultados);
?>
