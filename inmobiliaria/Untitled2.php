
<?php require_once('../Connections/con1.php'); ?>
<?php
mysql_select_db($database_con1, $con1);
$query_destacados = "SELECT ref_interna, dormitorios, banios, aseos, m2_construidos, precio, localidad, referencia_de_zona, foto1,zona_o_barrio FROM inmuebles WHERE destacado = 's'";
$destacados = mysql_query($query_destacados, $con1) or die(mysql_error());
$row_destacados = mysql_fetch_assoc($destacados);
$totalRows_destacados = mysql_num_rows($destacados);
$celda = 'primera';
?>
<?php
mysql_select_db($database_con1, $con1);
$query_localidades = "SELECT * FROM localidades";
$localidades = mysql_query($query_localidades, $con1) or die(mysql_error());
$row_localidades = mysql_fetch_assoc($localidades);
$totalRows_localidades = mysql_num_rows($localidades);
?>
<?php
mysql_select_db($database_con1, $con1);
$query_Tipos = "SELECT * FROM tipos";
$Tipos = mysql_query($query_Tipos, $con1) or die(mysql_error());
$row_Tipos = mysql_fetch_assoc($Tipos);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body><table border="0" cellpadding="0" cellspacing="0" class="menu_busqueda_tabla">
        <tr>
          <td class="menu_busqueda_celda"><span class="titulos">B&Uacute;SQUEDA</span>
            <form name="busqueda" method="GET" action="../pruebas/tablaresultados_consulta_y_tabla_varias_consultas_sinresultados_orden.php">
            <p><span class="subtitulos">Tipos de inmueble</span></p>
            <p>
              <select name="tipo" id="tipo" tabindex="1" size="1" class="cajas_formulario">
				<option value="all">todos</option>
  				<?php
					do {  
						?>
  							<option value="<?php echo $row_Tipos['tipo']?>"><?php echo $row_Tipos['tipo']?></option>
  						<?php
						}
					 while ($row_Tipos = mysql_fetch_assoc($Tipos));
  					$rows = mysql_num_rows($Tipos);
  					if($rows > 0) {
      					mysql_data_seek($Tipos, 0);
	  					$row_Tipos = mysql_fetch_assoc($Tipos);
  						}
						?>
			</select>
              </p>
            <p class="subtitulos">Localidad</p>
              <select name="localidad" id="localidad" tabindex="2" class="cajas_formulario">
				<option value="all">todos</option>
  				<?php
					do {  
						?>
  							<option value="<?php echo $row_localidades['granada']?>"><?php echo $row_localidades['granada']?></option>
  						<?php
						}
					 while ($row_localidades = mysql_fetch_assoc($localidades));
  					$rows = mysql_num_rows($localidades);
  					if($rows > 0) {
      					mysql_data_seek($localidades, 0);
	  					$row_localidades = mysql_fetch_assoc($localidades);
  						}
						?>
			</select>
          <p class="subtitulos">Precio &#8364;</p>
            <select name="precio" id="precio" tabindex="3" class="cajas_formulario">
              <option value="all" selected>Todos</option>
              <option value="between 0 and 99999">menos de 100.000 &euro;</option>
              <option value="between 100000 and 120000">100.000 - 120.000 &euro;</option>
              <option value="between 120001 and 180000">120.001 - 180.000 &euro;</option>
              <option value="between 180001 and 250000">180.001 - 250.000 &euro;</option>
              <option value="between 250001 and 150000">250.001 - 300.000 &euro;</option>
              <option value="between 300001 and 350000">300.001 - 350.000 &euro;</option>
              <option value="between 350001 and 10000000">m&aacute;s de 350.000 &euro;</option>
            </select>
          <p class="subtitulos">Dormitorios</p>
            <select name="dormitorios" id="dormitorios" tabindex="4" class="cajas_formulario">
              <option selected value="all">Todos</option>
              <option value="1">1 dormitorio</option>
              <option value="2">2 dormitorios</option>
              <option value="3">3 dormitorios</option>
              <option value="4">4 dormitorios</option>
            </select>
          <p class="subtitulos">m<sup>2</sup></p>
            <select name="m2_construidos" id="m2_construidos" tabindex="5" class="cajas_formulario">
              <option selected value="all">Todos</option>
              <option value="between 50 and 100">50 - 100</option>
              <option value="between 101 and 150">101 - 150</option>
              <option value="between 150 and 10000000">+ 150</option>
            </select>
            <p>
              <input name="garaje" id="garaje" tabindex="6" type="checkbox" value="s">
              <span class="subtitulos">garaje</span></p>
            <p>
              <input name="ascensor" id="ascensor" tabindex="7" type="checkbox" value="s">
              <span class="subtitulos">ascensor </span></p>
           <input id="submit" type="submit" value="Buscar" class="botonbuscar">
            </form></td>
          <td class="resultados_celda"><span class="titulos">DESTACADOS</span> <br />
              <br />
                <table class="detacados_tabla">			
<?php do { 
			  if($celda == 'primera')
				  echo '<tr class="destacados_tr">';
              echo "<td>"; 
			  if($celda == 'primera')

			  	  {echo '<table class="detacados_inmuebles_izq_tabla">';}
			  else {echo '<table class="detacados_inmuebles_der_tabla">';}
              echo "<tr>";
              echo '<td><p><a href="inmobiliaria_detalles.php?ref_interna=';
			  echo $row_destacados['ref_interna']; echo '"><img src="fotos/'; 
			  if ($row_destacados['foto1']!=null) 
			  		{echo $row_destacados['foto1'];}else {echo 'sinimagen.jpg';}
			  echo '" class="imagenes_destacados"></a>';
			  echo '<span class="pueblobarrio">'; 
			  if ($row_destacados['localidad']== 'GRANADA' && $row_destacados['zona_o_barrio']!=null) 
			  		{echo $row_destacados['zona_o_barrio'];} else {echo $row_destacados['localidad'];}
			  echo'</span></p>';
              echo '<p><span class="negrita">'; echo $row_destacados['dormitorios']; echo " dormitorios<br />";
  			  echo "ba&ntilde;os " . $row_destacados['banios'] . " - aseos " .$row_destacados['aseos']. "<br />";
  			  echo $row_destacados['m2_construidos'] . " m2 - " .$row_destacados['precio']. " &#8364;</span><br />";
              echo '<span class="descripcion">'. $row_destacados['referencia_de_zona'] .'</span></p></td>';

              echo "</tr>";
			  echo '</table>';
			  if ($celda == 'primera')
				  {$celda = 'segunda';}
			  else {$celda = 'primera';}
}				
while ($row_destacados = mysql_fetch_assoc($destacados));
				if ($celda =='segunda')					
				 {echo "<td>";
				 echo '<table class="detacados_inmuebles_der_tabla">';
				 echo '<tr><td></td></tr>';
				 echo '</table>';
				 }

?>
</td>
            </tr>
          </table>          
          <p class="titulos">&nbsp;</p></td>
        </tr>
      </table>
</body>
</html>

<?php
mysql_free_result($destacados);

mysql_free_result($localidades);

mysql_free_result($Tipos);

?>