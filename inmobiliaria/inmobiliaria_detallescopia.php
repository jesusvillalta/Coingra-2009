<?php require_once('../Connections/con1.php'); ?>
<?php require_once('../funciones/inmobiliaria.php'); ?>
<?php
$ref_interna=$_GET['ref_interna'];
mysql_select_db($database_con1, $con1);
$query_detalles = "SELECT * FROM inmuebles WHERE ref_interna=$ref_interna";
$detalles = mysql_query($query_detalles, $con1) or die(mysql_error());
$row_detalles = mysql_fetch_assoc($detalles);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Coingra: Promotora Constructora e Inmobiliaria en Granada. Promociones y Obra Nueva.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="Promociones inmobiliarias, obra nueva, segunda mano, viviendas, pisos, apartamentos, casas, duplex, chalets, adosadas, pareadas..." />
<meta name="Keywords" content="cinturn de granada" />
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
              <td class="menu_oscura_tabla_celda">Inmobiliaria &gt; Resultados</td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table border="0" cellpadding="0" cellspacing="0" class="menu_busqueda_tabla">
        <tr>
          <td class="cuerpo_detalles_celda">
			  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
                <tr valign="top">
                  <td valign="middle"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="60%"><span class="negrita"><?php echo $row_detalles['tipo'];?></span><span class="clara"> Ref.   <?php echo $_GET['ref_interna'];?></span></td>
                      <td width="40%" colspan="3"><div align="right"><span class="Estilo2"></span></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td width="40%" colspan="3">&nbsp;</td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td class="negrita">
					  <?php if ($row_detalles['localidad']== 'GRANADA' && $row_detalles['zona_o_barrio']!=null) 
			  		{echo $row_detalles['zona_o_barrio'];} else {echo $row_detalles['localidad'];} ?></td>
                      <td width="40%" colspan="3"><span class="negrita">Precio: </span><span class="clara"><?php echo precios($row_detalles['precio']); ?> &#8364;</span></td>
                    </tr>
                  </table>                  </td>
                  <td class="botonesdetalles_celda">
                     &nbsp;<img height="8" alt="Imprimir" src="../fotos/inmobiliaria/lineavertical.jpg" />&nbsp;<br />
                  <a href="javascript:history.go(-1);" class="botones_menu_detalles">Volver a listado</a></td>
                  <td class="botonesdetalles_celda">
                     &nbsp;<img height="8" alt="Imprimir" src="../fotos/inmobiliaria/lineavertical.jpg" />&nbsp;<br />
                      <a href="javascript:print();" class="botones_menu_detalles">Imprimir<br />&nbsp;
                  </a></td>
                  <td class="botonesdetalles_celda">
				  	 &nbsp;<img height="8" alt="Imprimir" src="../fotos/inmobiliaria/lineavertical.jpg" />&nbsp;<br />
                  <a href="../correos/recomendar.php?ref_interna=<?php echo $_GET['ref_interna'];?>"class="botones_menu_detalles">Recomendar inmueble</a></td>
                  <td class="botonesdetalles_celda">
				  	 &nbsp;<img height="8" alt="Imprimir" src="../fotos/inmobiliaria/lineavertical.jpg" />&nbsp;<br />
                  <a href="../correos/informacion.php?ref_interna=<?php echo $_GET['ref_interna'];?>" class="botones_menu_detalles" >Solicitar informaci&oacute;n</a></td>
                </tr>
              </table>
			  <br /><br />
			  <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="50%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="100%" align="left" cellspacing="5">
                        <tr valign="bottom">
                          <td width="35%" class="negrita">Superficie util</td>
                          <td width="31%" class="negrita"><?php echo $row_detalles['m2_utiles']; ?> m<sup>2</sup></td>
                          <td width="22%" class="negrita">Sal&oacute;n</td>
                          <td width="12%" class="negrita"><?php echo $row_detalles['salon']; ?></td>
                        </tr>
                        <tr valign="bottom">
                          <td class="negrita">Superficie</td>
                          <td class="negrita"><?php echo $row_detalles['m2_construidos']; ?> m<sup>2</sup></td>
                          <td class="negrita">Ba&ntilde;os</td>
                          <td class="negrita"><?php echo $row_detalles['banios']; ?></td>
                        </tr>
                        <tr valign="bottom">
                          <td class="negrita">Dormitorios</td>
                          <td class="negrita"><?php echo $row_detalles['dormitorios']; ?></td>
                          <td class="negrita">Aseos</td>
                          <td class="negrita"><?php echo $row_detalles['aseos']; ?></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="100%" align="left" cellspacing="5">
                        <tr valign="top">
                          <td width="34%" class="detalldatosnormal">Provincia</td>
                          <td width="66%" class="negrita"><?php echo $row_detalles['provincia']; ?></td>
                          </tr>
                        <tr valign="top">
                          <td class="detalldatosnormal">Localidad</td>
                          <td class="negrita"><?php echo $row_detalles['localidad']; ?></td>
                          </tr>
                        <tr valign="top">
                          <td class="detalldatosnormal">Zona/barrio</td>
                          <td class="negrita"><?php echo $row_detalles['zona_o_barrio']; ?></td>
                          </tr>
                        <tr valign="top">
                          <td class="detalldatosnormal">Direcci&oacute;n</td>
                          <td class="negrita"><?php echo $row_detalles['direccion']; ?></td>
                        </tr>
                        <tr valign="top">
                          <td class="detalldatosnormal">Referencias</td>
                          <td class="negrita"><?php echo $row_detalles['referencia_de_zona']; ?></td>
                        </tr>
                        <tr valign="bottom">
                          <td class="detalldatosnormal">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr valign="bottom">
                          <td height="35" colspan="2" class="negrita">Caracteriticas</td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>                  </td>
                  <td valign="top"><table width="100%"  border="0" cellspacing="5" cellpadding="0">
                    <tr>
                      <td rowspan="3">
					  
					              <div align="center">
					  <?php if ($row_detalles['foto1']!=''){?>
					  <a href="javascript:popup('<?php echo $ruta_foto_pa_popup = "fotos/".$rutaFoto=img_fotos($row_detalles['foto1']);?>',<?php $size = GetImageSize($ruta_foto_pa_popup); echo "'".$size[0] ."','".$size[1]."')";?>"><?php }?><img src="fotos/<?php echo $rutaFoto=img_fotos($row_detalles['foto1']);?> "style=" border: #CCCCCC 1px solid;" alt="foto1" width="200" height="150" border="0" /><?php if ($row_detalles['foto1']!=''){?> 
					  </a><?php }?></div></td>

					              <td><div align="center">
					  <?php if ($row_detalles['foto2']!=''){?>
					  <a href="javascript:popup('<?php echo $ruta_foto_pa_popup = "fotos/".$rutaFoto=img_fotos($row_detalles['foto2']);?>',<?php $size = GetImageSize($ruta_foto_pa_popup); echo "'".$size[0] ."','".$size[1]."')";?>"><?php }?><img src="fotos/<?php echo $rutaFoto=img_fotos($row_detalles['foto2']);?> "style=" border: #CCCCCC 1px solid;" alt="foto2" width="60" height="45" border="0" /><?php if ($row_detalles['foto2']!=''){?> 
					  </a><?php }?></div></td>
					  
					              <td><div align="center">
					  <?php if ($row_detalles['foto3']!=''){?>
					  <a href="javascript:popup('<?php echo $ruta_foto_pa_popup = "fotos/".$rutaFoto=img_fotos($row_detalles['foto3']);?>',<?php $size = GetImageSize($ruta_foto_pa_popup); echo "'".$size[0] ."','".$size[1]."')";?>"><?php }?><img src="fotos/<?php echo $rutaFoto=img_fotos($row_detalles['foto3']);?> "style=" border: #CCCCCC 1px solid;" alt="foto3" width="60" height="45" border="0" /><?php if ($row_detalles['foto3']!=''){?> 
					  </a><?php }?></div></td>
                    </tr>
                    <tr>
					              <td><div align="center">
					  <?php if ($row_detalles['foto4']!=''){?>
					  <a href="javascript:popup('<?php echo $ruta_foto_pa_popup = "fotos/".$rutaFoto=img_fotos($row_detalles['foto4']);?>',<?php $size = GetImageSize($ruta_foto_pa_popup); echo "'".$size[0] ."','".$size[1]."')";?>"><?php }?><img src="fotos/<?php echo $rutaFoto=img_fotos($row_detalles['foto4']);?> "style=" border: #CCCCCC 1px solid;" alt="foto4" width="60" height="45" border="0" /><?php if ($row_detalles['foto4']!=''){?> 
					  </a><?php }?></div></td>
					              <td><div align="center">
					  <?php if ($row_detalles['foto5']!=''){?>
					  <a href="javascript:popup('<?php echo $ruta_foto_pa_popup = "fotos/".$rutaFoto=img_fotos($row_detalles['foto5']);?>',<?php $size = GetImageSize($ruta_foto_pa_popup); echo "'".$size[0] ."','".$size[1]."')";?>"><?php }?><img src="fotos/<?php echo $rutaFoto=img_fotos($row_detalles['foto5']);?> "style=" border: #CCCCCC 1px solid;" alt="foto5" width="60" height="45" border="0" /><?php if ($row_detalles['foto5']!=''){?> 
					  </a><?php }?></div></td>
                    </tr>
                    <tr>
					              <td><div align="center">
					  <?php if ($row_detalles['foto6']!=''){?>
					  <a href="javascript:popup('<?php echo $ruta_foto_pa_popup = "fotos/".$rutaFoto=img_fotos($row_detalles['foto6']);?>',<?php $size = GetImageSize($ruta_foto_pa_popup); echo "'".$size[0] ."','".$size[1]."')";?>"><?php }?><img src="fotos/<?php echo $rutaFoto=img_fotos($row_detalles['foto6']);?> "style=" border: #CCCCCC 1px solid;" alt="foto6" width="60" height="45" border="0" /><?php if ($row_detalles['foto6']!=''){?> 
					  </a><?php }?></div></td>
					              <td><div align="center">
					  <?php if ($row_detalles['foto7']!=''){?>
					  <a href="javascript:popup('<?php echo $ruta_foto_pa_popup = "fotos/".$rutaFoto=img_fotos($row_detalles['foto7']);?>',<?php $size = GetImageSize($ruta_foto_pa_popup); echo "'".$size[0] ."','".$size[1]."')";?>"><?php }?><img src="fotos/<?php echo $rutaFoto=img_fotos($row_detalles['foto7']);?> "style=" border: #CCCCCC 1px solid;" alt="foto7" width="60" height="45" border="0" /><?php if ($row_detalles['foto7']!=''){?> 
					  </a><?php }?></div></td>
                    </tr>
                    <tr>
                      <td colspan="3"><div align="right"><span class="negrita"><br />
                      Pinchar en fotos para ampliarlas</span></div></td>
                    </tr>
                  </table>                  </td>
                </tr>
              </table>			  
			  <table width="90%" align="center">
                <tbody>
                  <tr>
                    <td colspan="6"></td>
                  </tr>
                  <tr>
                    <td width="0" class="detalldatosnormal1">&nbsp;</td>
                    <td class="detalldatosnormal1" width="32%">&nbsp;</td>
                    <td width="0" class="detalldatosnormal1">&nbsp;</td>
                    <td class="detalldatosnormal1" width="34%">&nbsp;</td>
                    <td width="0" class="detalldatosnormal1">&nbsp;</td>
                    <td class="detalldatosnormal1" width="19%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['amueblado']);?>
					></td>
                    <td>Amueblado</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['jardin']);?>
					></td>
                    <td>Jard&iacute;n</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['alarma']);?>
					></td>
                    <td>Alarma</td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['garaje']);?>
					></td>
                    <td>Garaje</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['piscina']);?>
					></td>
                    <td>Piscina</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['parabolica']);?>
					></td>
                    <td>Parab&oacute;lica</td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['ascensor']);?>
					></td>
                    <td>Ascensor</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['trastero']);?>
					></td>
                    <td>Trastero</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['chimenea']);?>
					></td>
                    <td>Chimenea</td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['calefaccion']);?>
					></td>
                    <td>Calefacci&oacute;n</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['armarios_empotrados']);?>
					></td>
                    <td>Armarios Empotrados </td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['puerta_blindada']);?>
					></td>
                    <td>Puerta Blindada </td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['cocina_amueblada']);?>
					></td>
                    <td>Cocina Amueblada</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['video_portero']);?>
					></td>
                    <td>Video Portero</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['tendedero']);?>
					></td>
                    <td>Tendedero</td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['terraza']);?>
					></td>
                    <td>Terraza</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['aire_acondicionado']);?>
					></td>
                    <td>Aire Acondicionado </td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['linea_telefonica']);?>
					></td>
                    <td>L&iacute;nea Telef&oacute;nica </td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['soleado']);?>
					></td>
                    <td>Soleado</td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['doble_ventana']);?>
					></td>
                    <td>Doble Ventana</td>
                    <td width="0" class="img_caract_celda">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['areas_deportivas']);?>
					></td>
                    <td>&aacute;reas deportivas </td>
                    <td width="0" class="img_caract_celda"><img src=
					<?php echo $ruta=img_caracteristicas($row_detalles['carpinteria_metalica']);?>
					></td>
                    <td>Carpinter&iacute;a met&aacute;lica </td>
                    <td width="0" class="img_caract_celda">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="6">
                      <br>
                      <br>
                      <table width="50%" border="0" align="center" id="leyendas">                        
                        <tr>
                          <td width="27%"><img src="fotos/ok.jpg" alt="s&iacute;" width="14" height="14">  S&iacute;</td>
                          <td width="26%"><img src="fotos/aspa.jpg" alt="no" width="16" height="16">  No</td>
                          <td width="47%"><img src="fotos/guion.jpg" alt="Sin informaci&oacute;n" width="14" height="14"> Sin informaci&oacute;n</td>
                        </tr>
                      </table></td>
                  </tr>
                </tbody>
              </table>
			  <table width="100%" align="center" cellspacing="5">
                <tr valign="bottom">
                  <td width="100%" height="41" class="negrita">Observaciones</td>
                </tr>
            </table>
			  <table width="90%" align="center" cellspacing="5">
                <tr valign="bottom">
                  <td width="100%" class="detalldatosnormal">&nbsp;</td>
                </tr>
                <tr valign="bottom">
                  <td class="detall_observaciones"><?php echo $row_detalles['observaciones']?></td>
                </tr>
            </table>			  
		    <p>&nbsp;</p></td>
        </tr>
      </table>
    </td>
    <td rowspan="2" class="cuerpolados_celda">&nbsp;</td>
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
          <td width="0"><img src="../../../fotos/general/arroba.jpg" alt="arro" width="10" height="13" /> </td>
          <td class="pie_celda_intro_mail" width="0"><div align="left">coingra.es</div></td>
        </tr>
      </table>
      <a class="pie" href="../correos/contacto.php">Contacto</a> | <a class="pie" href="http://72.29.86.55/~coingra/aviso.html" target="popup_1" onclick="window.open(href,target,'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,top=0px,left=0px,width=600px,height=355px'); return false;">Aviso legal</a> | <a class="pie" href="#">xhtml 1.0</a> | <a class="pie"href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A//72.29.86.55/~coingra/general.css&amp;usermedium=all">css</a> | <span class="pie_creadopor">Sitio creado por <a class="pie" href="http://72.29.86.55/~coingra/correos/webmaster.php">JFVC</a></span><br /></td>
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
mysql_free_result($detalles);
?>