<?php require_once('../Connections/con1.php'); ?>
<?php require_once('../funciones/inmobiliaria.php'); ?>
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
<title>Coingra: Promotora Constructora e Inmobiliaria en Granada. Promociones y Obra Nueva.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="Inmobiliaria, Promotora y Constructora, obra nueva, segunda mano, viviendas, pisos, apartamentos, casas, duplex, chalets, adosadas, pareadas" />
<meta name="Keywords" content="Inmobiliaria, Promotora y Constructora, obra nueva, segunda mano, viviendas, pisos, apartamentos, casas, duplex, chalets, adosadas, pareadas, granada" />
<link href="../general.css" rel="stylesheet" type="text/css" />
<link href="../inmobiliaria.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="../menu.js"></script>
<script type="text/javascript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" class="cuerpo_tabla">
  <tr>
    <td style="height:37px">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="3" class="cuerpolados_celda">&nbsp;</td>
    <td class="cuerpo_centro_celda"><table cellpadding="0" cellspacing="0" class="cabecera">
      <tr>
        <td width="25%">
          <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td style="background-color: #102852;"><img src="../fotos/general/logo_opt2.jpg" alt="coingra" height="64" /></td>
              <td style="background-image:url(../fotos/general/introcolor.jpg); vertical-align:bottom;"><div style="height:40px; border-right:solid #CCCCCC 1px">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><div align="left"><span class="textocoingra_intro">C</span></div></td>
                  <td><div align="left"><span class="textocoingra_intro">O</span></div></td>
                  <td><div align="left"><span class="textocoingra_intro">I</span></div></td>
                  <td><div align="left"><span class="textocoingra_intro">N</span></div></td>
                  <td><div align="left"><span class="textocoingra_intro">G</span></div></td>
                  <td><div align="left"><span class="textocoingra_intro">R</span></div></td>
                  <td><div align="left"><span class="textocoingra_intro">A</span></div></td>
                </tr>
              </table></div></td>
            </tr>
          </table>
        </td>
        <td class="segundo"><span class="textologo">Promotora</span><br />
          <span class="textologo">Constructora</span><br />
          <span class="textologo">Inmobiliaria</span></td>
        <td class="tercero">&nbsp;</td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td class="menu_clara_tabla_celda"><div align="right">
                <table width="413" cellpadding="0" cellspacing="0" class="menu_principal_clara">
                    <tr>
                      <td class="menu_clara_tabla_celda"><a href="../index.html" onmouseover="main_menu('inicio')" class="menu_princ">Inicio</a></td>
                      <td class="menu_clara_tabla_celda">|</td>
                      <td class="menu_clara_tabla_celda"><a href="../promotora/prom_severo_ochoa/descripcion/promo_01_descripcion.html" onmouseover="main_menu('prom')" class="menu_princ">Promotora</a></td>
                      <td class="menu_clara_tabla_celda">|</td>
                      <td class="menu_clara_tabla_celda"><a href="../constructora/constructora.html" onmouseover="main_menu('cons')" class="menu_princ">Constructora</a></td>
                      <td class="menu_clara_tabla_celda">|</td>
                      <td class="menu_clara_tabla_celda"><a href="inmobiliaria_principal.php" onmouseover="main_menu('ocultaSinRetardo')" class="menu_princ">Inmobiliaria</a></td>
                    </tr>
                    </table>
              </div></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table cellpadding="0" cellspacing="0" class="menu_oscura_tabla">
            <tr>
              <td class="menu_oscura_tabla_celda">Inmobiliaria</td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table border="0" cellpadding="0" cellspacing="0" class="menu_busqueda_tabla">
        <tr>
          <td class="menu_busqueda_celda"><span class="titulos">B&Uacute;SQUEDA</span>
            <form action="inmobiliaria_resultados.php" method="get" name="busqueda" id="busqueda">
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
              <option value="all" selected="selected">todos</option>
              <option value="between 0 and 99999">menos de 100.000 &euro;</option>
              <option value="between 100000 and 120000">100.000 - 120.000 &euro;</option>
              <option value="between 120001 and 180000">120.001 - 180.000 &euro;</option>
              <option value="between 180001 and 250000">180.001 - 250.000 &euro;</option>
              <option value="between 250001 and 150000">250.001 - 300.000 &euro;</option>
              <option value="between 300001 and 350000">300.001 - 350.000 &euro;</option>
              <option value="between 350001 and 99999999">m&aacute;s de 350.000 &euro;</option>
            </select>
          <p class="subtitulos">Dormitorios</p>
            <select name="dormitorios" id="dormitorios" tabindex="4" class="cajas_formulario">
              <option selected="selected" value="all">todos</option>
              <option value="1">1 dormitorio</option>
              <option value="2">2 dormitorios</option>
              <option value="3">3 dormitorios</option>
              <option value="4">4 dormitorios</option>
            </select>
          <p class="subtitulos">m<sup>2</sup></p>
            <select name="m2_construidos" id="m2_construidos" tabindex="5" class="cajas_formulario">
              <option selected="selected" value="all">todos</option>
              <option value="between 50 and 100">50 - 100</option>
              <option value="between 101 and 150">101 - 150</option>
              <option value="between 150 and 10000000">+ 150</option>
            </select>
            <p>
              <input name="garaje" id="garaje" tabindex="6" type="checkbox" value="s" />
              <span class="subtitulos">garaje</span></p>
            <p>
              <input name="ascensor" id="ascensor" tabindex="7" type="checkbox" value="s" />
              <span class="subtitulos">ascensor </span></p>
            <input name="submit" type="submit" class="botonbuscar" id="submit" value="Buscar" />
            <br />
            <br />
            </form></td>
          <td class="resultados_celda"><span class="titulos">DESTACADOS</span> <br />
              <br />
			  <?php if ($totalRows_destacados == 0){echo "Servicios inmobiliarios no disponibles, disculpen las molestias.";} else{?>
			  
                <table class="detacados_tabla">			
<?php do { 
			  if($celda == 'primera')
				  echo '<tr class="destacados_tr">';
              echo '<td class="detacados_inmuebles_2celda">'; 
			  if($celda == 'primera')
			  	  {echo '<table class="detacados_inmuebles_izq_tabla">';}
			  else {echo '<table class="detacados_inmuebles_der_tabla">';}?>
              <tr>
              <td class="detacados_inmuebles_2celda"><p><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_destacados['ref_interna'];?>">
			  
			<?php if ($row_destacados['foto1']!=null) 
			  		{$rutaImagen="inmuebles/".$row_destacados['foto1'];}else {$rutaImagen='sinimagen_destacado.gif';}?>
			  <img src="fotos/<?php echo $rutaImagen?>" alt="ver inmueble" class="imagenes_destacados" /></a>
			  <span class="pueblobarrio"> 
			  <?php if ($row_destacados['localidad']== 'GRANADA' && $row_destacados['zona_o_barrio']!=null) 
			  		{echo $row_destacados['zona_o_barrio'];} else {echo $row_destacados['localidad'];}?>
			  </span></p>
              <p><span class="negrita"><?php echo $row_destacados['dormitorios'];?> dormitorios<br />
  			  ba&ntilde;os <?php echo $row_destacados['banios']?> - aseos <?php echo $row_destacados['aseos'];?><br />
  			  <?php echo $row_destacados['m2_construidos']?> m<sup>2</sup> - <?php echo precios($row_destacados['precio']); ?> &#8364;</span><br />
              <span class="descripcion"> <?php echo $row_destacados['referencia_de_zona'];?></span></p></td>
              </tr>
			  </table>
			  </td>
			  <?php if ($celda == 'primera')
				  {$celda = 'segunda';}
			  else {echo '</tr>';
			  $celda = 'primera';}
}				
while ($row_destacados = mysql_fetch_assoc($destacados));
				if ($celda =='segunda')					
				 {?>
          <td>
				 <table class="detacados_inmuebles_der_tabla">
				 <tr><td></td></tr>
				 </table>
				 </td>
        </tr>
      </table> 
				 <?php } else{?>
      </table>  
	  <?php }?>
	  <?php }?>        
          <br />
<br />
<br />
</td>
  </tr>
</table>
    </td><td class="cuerpolados_celda">&nbsp;</td>
  </tr>
  <tr>
    <td class="cuerpo_centro_celda"><table cellpadding="0" cellspacing="0" class="menu_oscura_tabla">
      <tr>
        <td class="pie_fina_celda">&nbsp;</td>
      </tr>
    </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="pie_tabla">
        <tr>
          <td class="pie_celda">COINGRA - Urb. Jard&iacute;n de la Reina, C./ Gardenia, 1 - 18006 (Granada)<br />
      <table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="pie_celda_intro_mail" width="0"><div align="right">Telf.: 958 26 09 38 - Fax: 958 26 09 14 - email: coingra </div></td>
          <td width="0"><img src="../fotos/general/arroba.jpg" alt="arro" width="10" height="13" /> </td>
          <td class="pie_celda_intro_mail" width="0"><div align="left">coingra.es</div></td>
        </tr>
      </table>
      <a class="pie" href="../correos/contacto.php">Contacto</a> | <a class="pie" href="http://72.29.86.55/~coingra/aviso.html" target="popup_1" onclick="window.open(href,target,'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,top=0px,left=0px,width=600px,height=355px'); return false;">Aviso legal</a> | <a class="pie" href="http://validator.w3.org/check?uri=http%3A%2F%2F72.29.86.55%2F~coingra%2Finmobiliaria%2Finmobiliaria_principal.php">xhtml 1.0</a> | <a class="pie"href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A//72.29.86.55/~coingra/general.css&amp;usermedium=all">css</a> | <span class="pie_creadopor">Sitio creado por <a class="pie" href="http://72.29.86.55/~coingra/correos/webmaster.php">JFVC</a></span><br /></td>
        </tr>
      </table>    </td>
  </tr>
  <tr>
    <td style="height:37px">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<div id="inicio" align="right" style="position:absolute; left:4%; top:118px; width:92%; z-index:1; background-color: #D6CFD6; layer-background-color: #D6CFD6; border: 1px none #000000; text-align: right; visibility: hidden;">
  <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
    <tr>
      <td class="menu_clara_tabla_celda_submenu"><div align="right">
        <table width="250" cellpadding="0" cellspacing="0" class="menu_principal_clara">
          <tr>
            <td class="menu_clara_tabla_celda_submenu"><a href="../index.html" target="_parent" class="menu_princ">Portada</a></td>
            <td class="menu_clara_tabla_celda_submenu">|</td>
            <td class="menu_clara_tabla_celda_submenu"><a href="../inicio/quienes_somos.html" class="menu_princ">&iquest;Qui&eacute;nes somos?</a></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
</div>
<div id="prom" align="right" style="position:absolute; left:4%; top:118px; width:92%; z-index:1; background-color: #D6CFD6; layer-background-color: #D6CFD6; border: 1px none #000000; text-align: right; visibility: hidden;">
  <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
    <tr>
      <td class="menu_clara_tabla_celda_submenu"><div align="right">
        <table width="410" cellpadding="0" cellspacing="0" class="menu_principal_clara">
          <tr>
            <td class="menu_clara_tabla_celda_submenu"><a href="../promotora/prom_severo_ochoa/descripcion/promo_01_descripcion.html" class="menu_princ">Residencial Severo Ochoa</a></td>
            <td class="menu_clara_tabla_celda_submenu">|</td>
            <td class="menu_clara_tabla_celda_submenu"><a href="../promotora/prom_anteriores/prom_anteriores.html" class="menu_princ">Promociones Anteriores</a></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
</div>
<div id="cons" align="right" style="position:absolute; left:4%; top:118px; width:92%; z-index:1; background-color: #D6CFD6; layer-background-color: #D6CFD6; border: 1px none #000000; text-align: right; visibility: hidden;">
  <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
    <tr>
      <td class="menu_clara_tabla_celda_submenu"><div align="right">
        <table width="292" cellpadding="0" cellspacing="0" class="menu_principal_clara">
          <tr>
            <td class="menu_clara_tabla_celda_submenu"><a href="#" class="menu_princ">Obras actuales</a></td>
            <td class="menu_clara_tabla_celda_submenu">|</td>
            <td class="menu_clara_tabla_celda_submenu"><a href="../constructora/cons_anteriores/cons_anteriores.html" class="menu_princ">Obras Anteriores</a></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
</div>
<div id="borrar" align="right" style="position:absolute; left:0%; top:137px; width:100%; z-index:1; text-align: right; visibility: visible;">
  <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0" onmouseover="main_menu('ocultar')">
    <tr>
      <td class="ocultasubmenu_celda"></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($destacados);

mysql_free_result($localidades);

mysql_free_result($Tipos);

?>