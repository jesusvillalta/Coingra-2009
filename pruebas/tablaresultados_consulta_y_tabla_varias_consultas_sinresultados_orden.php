<?php require_once('../Connections/con1.php'); ?>
<?php require_once('../funciones/inmobiliaria.php'); ?>
<?php 

//--------------------pruebas------------------------------------------------
/*if(isset ($_GET))
{
echo '$_GET existe y es '.$_GET['tipos'].'<br />';
echo '$_GET["tipos"] existe y es '.$_GET['tipo'];
}*/
//----------------------fin pruebas-------------------------------------------
unset($_GET['submit']);
if(isset($_GET['campo']))
	{$orden="ORDER BY ". $_GET['campo'];
	unset($_GET['campo']);
	}
else{$orden="";/* Muestra los resultados de la sentencia SQL de forma ascendente.*/
}
$varias_condiciones='no';

		if($_GET['tipo']==all && $_GET['localidad']==all && $_GET['precio']==all && $_GET['dormitorios']==all && $_GET['m2_construidos']==all  && $_GET['garaje']!=s  && $_GET['ascensor']!=s)
			{
			$condicion="";
			echo 'condicion nula';
			}
			else{
				$condicion="WHERE ";
		
				foreach ($_GET as $indice=>$valor){
					if(($valor!='all' && $valor!=null)){
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
				if ($condicion=='WHERE ')
					{$condicion="";}
				echo $condicion;
			}
	
//-------------------------------DREAMWEAVER ----------------------------------------
$maxRows_resultados = 5;
$pageNum_resultados = 0;
if (isset($_GET['pageNum_resultados'])) {
  $pageNum_resultados = $_GET['pageNum_resultados'];
}
$startRow_resultados = $pageNum_resultados * $maxRows_resultados;

mysql_select_db($database_con1, $con1);
$query_resultados = "SELECT tipo, dormitorios, m2_construidos, precio, provincia, localidad, zona_o_barrio, foto1 FROM inmuebles $condicion $orden";

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
    <td>tipo <a href="tablaresultados_consulta_y_tabla_varias_consultas_sinresultados_orden.php?campo=tipo&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>">u</a> 

<a href="tablaresultados_consulta_y_tabla_varias_consultas_sinresultados_orden.php?campo=tipo DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>">d </a></td>
    <td>dormitorios</td>
    <td>m2_construidos</td>
    <td>precio <a href="tablaresultados_consulta_y_tabla_varias_consultas_sinresultados_orden.php?campo=precio&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>">u</a> 

<a href="tablaresultados_consulta_y_tabla_varias_consultas_sinresultados_orden.php?campo=precio DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>">d </a></td>
    <td>provincia</td>
    <td>localidad</td>
    <td>zona_o_barrio</td>
	<td>fotos</td>
  </tr>
  <?php
  $totalRows_resultados_inicial= mysql_num_rows($resultados);
  if ($totalRows_resultados_inicial==0){
  echo $totalRows_resultados_inicial;
  ?>
  </table>sin resultados<br />
  
  <?php }else {?>
	  <?php do { ?>
		<tr>
		  <td><?php echo $row_resultados['tipo']; ?></td>
		  <td><?php echo $row_resultados['dormitorios']; ?></td>
		  <td><?php echo $row_resultados['m2_construidos']; ?></td>
		  <td><?php echo $row_resultados['precio']; ?></td>
		  <td><?php echo $row_resultados['provincia']; ?></td>
		  <td><?php echo $row_resultados['localidad']; ?></td>
		  <td><?php echo $row_resultados['zona_o_barrio']; ?></td>
  		  <td><?php if($row_resultados['foto1']!=null){echo 'sí';}else {echo 'no';} ?></td>
		</tr>
	  <?php } while ($row_resultados = mysql_fetch_assoc($resultados));
  }?>
     </table>

</body>
</html>
<?php
mysql_free_result($resultados);
?>
