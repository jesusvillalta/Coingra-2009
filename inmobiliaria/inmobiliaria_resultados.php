<?php require_once('../Connections/con1.php'); ?>
<?php require_once('../funciones/inmobiliaria.php'); ?>
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
			/*echo 'condicion nula';*/
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
						if($indice!='pageNum_resultados' && $indice!='totalRows_resultados'){
							if($varias_condiciones==no){
								$condicion= "$condicion $indice = '$valor'";}
							else{				echo $indice."br";
								$condicion= "$condicion and $indice = '$valor'";}
						
							$varias_condiciones='si';
							}
						}
					}								
				}
				if ($condicion=='WHERE ')
					{$condicion="";}
			}
?>
<?php
//-------------------------------DREAMWEAVER ----------------------------------------
mysql_select_db($database_con1, $con1);
$query_resultados = "SELECT ref_interna, tipo, dormitorios, m2_construidos, precio, foto1, provincia, localidad, zona_o_barrio FROM inmuebles $condicion $orden";
$resultados = mysql_query($query_resultados, $con1) or die(mysql_error());
$row_resultados = mysql_fetch_assoc($resultados);
$totalRows_resultados = mysql_num_rows($resultados);
?>
<?php
$maxRows_resultados = 10;
$pageNum_resultados = 0;
if (isset($_GET['pageNum_resultados'])) {
  $pageNum_resultados = $_GET['pageNum_resultados'];
}
$startRow_resultados = $pageNum_resultados * $maxRows_resultados;

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

$queryString_resultados = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_resultados") == false && 
        stristr($param, "totalRows_resultados") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_resultados = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_resultados = sprintf("&totalRows_resultados=%d%s", $totalRows_resultados, $queryString_resultados);
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
    <td rowspan="2" class="cuerpolados_celda">&nbsp;</td>
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
                      <td class="menu_clara_tabla_celda"><a href="inmobiliaria_principal.php"  onmouseover="main_menu('ocultaSinRetardo')" class="menu_princ">Inmobiliaria</a></td>
                    </tr>
                    </table>
              </div></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table cellpadding="0" cellspacing="0" class="menu_oscura_tabla">
            <tr>
              <td class="menu_oscura_tabla_celda">Inmobiliaria &gt; Resultados</td>
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
          <td class="resultados_celda">
                <table class="pag_resultados_indice_tabla">
        <tr>
          <td class="pag_resultados_indiceizq_celda"><?php echo $totalRows_resultados?>  inmuebles encontrados</td>
          <td class="pag_resultados_indiceder_celda"><?php if ($pageNum_resultados > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, 0, $queryString_resultados); ?>"><img src="fotos/First.gif" alt="inicio" border="0" /></a>
                  <?php } // Show if not first page ?><?php if ($pageNum_resultados > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, max(0, $pageNum_resultados - 1), $queryString_resultados); ?>"><img src="fotos/previous.jpg" alt="atras" border="0" /></a>
                  <?php } // Show if not first page ?><span class="pag_resultados_indice_numeros"><?php 
	$pagIni=$pageNum_resultados+1;
	$pagFin=$totalPages_resultados+1;
	if($pagFin!=0){
	echo  "p&aacute;gina ". $pagIni . " de " . $pagFin;
	}
	?></span><?php if ($pageNum_resultados < $totalPages_resultados) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, min($totalPages_resultados, $pageNum_resultados + 1), $queryString_resultados); ?>"><img src="fotos/next.jpg" alt="siguiente" border="0" /></a>
                  <?php } // Show if not last page ?> <?php if ($pageNum_resultados < $totalPages_resultados) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, $totalPages_resultados, $queryString_resultados); ?>"><img src="fotos/Last.gif" alt="final" border="0" /></a>
                  <?php } // Show if not last page ?></td>
        </tr>
      </table>
                <p>&nbsp;</p>
                <table class="pag_resultados_tabla">
            <tr class="pag_resultados_tr">
              <td class="pag_resultados_celda">Tipo <a href="inmobiliaria_resultados.php?campo=tipo&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.jpg" alt="ascendente" class="flechas_asc_desc" /></a> <a href="inmobiliaria_resultados.php?campo=tipo DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/down.jpg" alt="descendente"  class="flechas_asc_desc" /></a></td>
              <td class="pag_resultados_celda">Provincia <a href="inmobiliaria_resultados.php?campo=provincia&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.jpg" alt="ascendente" class="flechas_asc_desc" /></a> <a href="inmobiliaria_resultados.php?campo=provincia DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/down.jpg" alt="descendente"  class="flechas_asc_desc" /></a></td>
              <td class="pag_resultados_celda">Loc./Zona <a href="inmobiliaria_resultados.php?campo=localidad&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.jpg" alt="ascendente" class="flechas_asc_desc" /></a> <a href="inmobiliaria_resultados.php?campo=localidad DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/down.jpg" alt="descendente"  class="flechas_asc_desc" /></a></td>
              <td class="pag_resultados_celda">Dorm. <a href="inmobiliaria_resultados.php?campo=dormitorios&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.jpg" alt="ascendente" class="flechas_asc_desc" /></a> <a href="inmobiliaria_resultados.php?campo=
dormitorios DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/down.jpg" alt="descendente"  class="flechas_asc_desc" /></a></td>
              <td class="pag_resultados_celda">m<sup>2</sup> <a href="inmobiliaria_resultados.php?campo=m2_construidos&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.jpg" alt="ascendente" class="flechas_asc_desc" /></a> <a href="inmobiliaria_resultados.php?campo=m2_construidos DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/down.jpg" alt="descendente"  class="flechas_asc_desc" /></a></td>
              <td class="pag_resultados_celda">Fotos <a href="inmobiliaria_resultados.php?campo=foto1&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.jpg" alt="ascendente" class="flechas_asc_desc" /></a> <a href="inmobiliaria_resultados.php?campo=foto1 DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/down.jpg" alt="descendente"  class="flechas_asc_desc" /></a></td>
              <td class="pag_resultados_celda">&#8364; <a href="inmobiliaria_resultados.php?campo=precio&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/up.jpg" alt="ascendente" class="flechas_asc_desc" /></a> <a href="inmobiliaria_resultados.php?campo=precio DESC&amp;
tipo=<?php echo $_GET['tipo'];?>&amp;
localidad=<?php echo $_GET['localidad'];?>&amp;
precio=<?php echo $_GET['precio'];?>&amp;
dormitorios=<?php echo $_GET['dormitorios'];?>&amp;
m2_construidos=<?php echo $_GET['m2_construidos'];?>&amp;
garaje=<?php echo $_GET['garaje'];?>&amp;
ascensor=<?php echo $_GET['ascensor'];?>"><img src="fotos/down.jpg" alt="descendente"  class="flechas_asc_desc" /></a></td>
       </tr>    
  <?php
  $totalRows_resultados_inicial= mysql_num_rows($resultados);
  if ($totalRows_resultados_inicial==0){
  ?><tr><td colspan="7">sin resultados</td> </tr>
  </table>

    <?php }else {?>	 
	 <?php $clase='class="pag_resultados_clara_celda"'; ?>
	  <?php do { ?><tr>
		<?php if ($clase=='class="pag_resultados_clara_celda"') {?>
		  <td class="pag_resultados_clara_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['tipo']; ?></a></td>
		  <td class="pag_resultados_clara_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['provincia']; ?></a></td>
		  <td class="pag_resultados_clara_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php if ($row_resultados['localidad']=='GRANADA'){echo $row_resultados['zona_o_barrio'];}else{echo $row_resultados['localidad'];} ?></a></td>
		  <td class="pag_resultados_clara_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['dormitorios']; ?></a></td>
		  <td class="pag_resultados_clara_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['m2_construidos']; ?></a></td>
		  <td class="pag_resultados_clara_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php if($row_resultados['foto1']!=null){echo 's&iacute; ';}else {echo 'no';} ?></a></td>
		  <td class="pag_resultados_clara_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo precios($row_resultados['precio']); ?></a></td>				
<?php $clase='class="pag_resultados_oscura_celda"';?>

<?php }else {?>	
		  <td class="pag_resultados_oscura_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['tipo']; ?></a></td>
		  <td class="pag_resultados_oscura_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['provincia']; ?></a></td>
		  <td class="pag_resultados_oscura_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php if ($row_resultados['localidad']=='GRANADA'){echo $row_resultados['zona_o_barrio'];}else{echo $row_resultados['localidad'];} ?></a></td>
		  <td class="pag_resultados_oscura_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['dormitorios']; ?></a></td>
		  <td class="pag_resultados_oscura_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo $row_resultados['m2_construidos']; ?></a></td>
		  <td class="pag_resultados_oscura_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php if($row_resultados['foto1']!=null){echo 's&iacute;';}else {echo 'no';} ?></a></td>
		  <td class="pag_resultados_oscura_celda"><a href="inmobiliaria_detalles.php?ref_interna=<?php echo $row_resultados['ref_interna'];?>"><?php echo precios($row_resultados['precio']); ?></a></td>			  
<?php $clase='class="pag_resultados_clara_celda"';?>
<?php }?>
		</tr>

	  <?php } while ($row_resultados = mysql_fetch_assoc($resultados));?>
	  </table>
   <?php } ?>  </td>
  </tr>
</table>
    </td><td rowspan="2" class="cuerpolados_celda">&nbsp;</td>
  </tr>
  <tr>
    <td class="cuerpo_centro_celda"><table cellpadding="0" cellspacing="0" class="menu_oscura_tabla">
      <tr>
        <td class="pie_fina_celda"></td>
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
      <a class="pie" href="../correos/contacto.php">Contacto</a> | <a class="pie" href="http://72.29.86.55/~coingra/aviso.html" target="popup_1" onclick="window.open(href,target,'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,top=0px,left=0px,width=600px,height=355px'); return false;">Aviso legal</a> | <a class="pie" href="http://validator.w3.org/check?uri=http%3A%2F%2F72.29.86.55%2F~coingra%2Finmobiliaria%2Finmobiliaria_resultados.php%3Ftipo%3Dall%26localidad%3Dall%26precio%3Dall%26dormitorios%3Dall%26m2_construidos%3Dall%26submit%3DBuscar">xhtml 1.0</a> | <a class="pie"href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A//72.29.86.55/~coingra/general.css&amp;usermedium=all">css</a> | <span class="pie_creadopor">Sitio creado por <a class="pie" href="http://72.29.86.55/~coingra/correos/webmaster.php">JFVC</a></span><br /></td>
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
            <td class="menu_clara_tabla_celda_submenu"><a href="../index.html" target="_parent" class="menu2">Portada</a></td>
            <td class="menu_clara_tabla_celda_submenu">|</td>
            <td class="menu_clara_tabla_celda_submenu"><a href="../inicio/quienes_somos.html" class="menu2">&iquest;Qui&eacute;nes somos?</a></td>
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
            <td class="menu_clara_tabla_celda_submenu"><a href="../promotora/prom_severo_ochoa/descripcion/promo_01_descripcion.html" class="menu2">Residencial Severo Ochoa</a></td>
            <td class="menu_clara_tabla_celda_submenu">|</td>
            <td class="menu_clara_tabla_celda_submenu"><a href="../promotora/prom_anteriores/prom_anteriores.html" class="menu2">Promociones Anteriores</a></td>
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
            <td class="menu_clara_tabla_celda_submenu"><a href="#" class="menu2">Obras actuales</a></td>
            <td class="menu_clara_tabla_celda_submenu">|</td>
            <td class="menu_clara_tabla_celda_submenu"><a href="../constructora/cons_anteriores/cons_anteriores.html" class="menu2">Obras Anteriores</a></td>
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
mysql_free_result($localidades);

mysql_free_result($Tipos);

mysql_free_result($resultados);
?>