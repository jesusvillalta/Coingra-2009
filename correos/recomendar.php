<?php require_once('../Connections/con1.php'); ?>
<?php require_once('../funciones/inmobiliaria.php'); ?>
<?php
if(isset($_POST['nombre_recomendador']) && ($_POST['correo_destino']!=""))
	{
	
	$destino = $_POST['correo_destino'];
	$recomendador = $_POST['nombre_recomendador'];
	
	$coingra_nombre = "COINGRA";
	$coingra_mail = "coingra@coingra.es";
	$coingra_asunto = "COINGRA - Inmobiliaria - $recomendador le enva informaci n sobre un inmueble";
	$ref=$_POST['ref_interna'];
	$enlace="http://vierkof1.iespana.es/inmobiliaria/inmobiliaria_detalles.php?ref_interna=$ref";
	$comentarios = $_POST['comentarios'];
		
	$mensaje = "$recomendador le enva informaci n sobre un inmueble.\r\n\r\n$comentarios\r\nPulse en el siguiente enlace para verlo.\r\n$enlace";

	$cabecera =  "From: $coingra_mail\nReply-To: $coingra@hotmail.com\nX-Mailer: PHP\nErrors-To: $coingra_mail";

	$envio = mail($destino,$coingra_asunto,$mensaje,$cabecera);	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Coingra - Recomendar inmueble</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="Recomendar inmueble" />
<meta name="robots" content="noindex,follow" />
<link href="../general.css" rel="stylesheet" type="text/css" />
<link href="../inmobiliaria.css" rel="stylesheet" type="text/css" />
<link href="../correos.css" rel="stylesheet" type="text/css" />
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
                <table width="100%" border="0" align="right" cellpadding="0" cellspacing="0">
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
                      <td class="menu_clara_tabla_celda"><a href="../inmobiliaria/inmobiliaria_principal.php" onmouseover="main_menu('ocultaSinRetardo')" class="menu_princ">Inmobiliaria</a></td>
                    </tr>
                    </table>
              </div></td>
            </tr>
          </table>
              </div></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td><table cellpadding="0" cellspacing="0" class="menu_oscura_tabla">
            <tr>
              <td class="menu_oscura_tabla_celda">Recomendar inmueble</td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <table border="0" cellpadding="0" cellspacing="0" class="menu_busqueda_tabla">
        <tr>
          <td class="cuerpo_detalles_celda"><br />
		  <?php if (!isset($_POST['nombre_recomendador']))
		{ ?>
            <form action="recomendar.php" method="post" name="formcontacto" id="formcontacto">
     <table width="0" align="center">
       <tr>
         <td><p><span class="comentarios_supe">Nombre<br />
         </span>de qui&eacute;n env&iacute;a esta recomendaci&oacute;n</p>
           <input id="nombre_recomendador" name="nombre_recomendador" class="cajas_formulario" type="text" size="30" /></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         </tr>
       <tr>
         <td><p><span class="comentarios_supe">e-mail</span> al que se env&iacute;a</p>
           <input name="correo_destino" id="correo_destino" class="cajas_formulario" type="text" size="30" /></td>
         </tr>
		 <tr>
		   <td><p class="negrita_solic_infor"><br />
           <br />
           Comentarios
		 <input name="ref_interna" type="hidden" id="ref_interna" value="<?php echo $_GET['ref_interna']?>" size="5" maxlength="5" class="cajas_formulario" />
		   </p>
             <textarea name="comentarios" cols="40" rows="5" class="cajas_formulario" id="comentarios"></textarea></td> 
	   </tr>
     </table>
     <input type="hidden" name="referencia_interna2" value="$_GET['ref_interna']" />
     <div align="center">
               <p>
                 <input name="enviar2" type="submit" class="botonbuscar" value="Enviar" />
                </p>
           </div><br />
          <br />
          </form><?php }?> 
		  
		  <?php if (isset($_POST['nombre_recomendador']) && ($_POST['correo_destino']=="" || $_POST['nombre_recomendador']==""))
			{?>
			<p style="text-align:center;">Su correo no se ha podido enviar, int&eacute;ntelo de nuevo, gracias.<br />
			  <br />
			</p>
			<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="boton" align="center" class="botonbuscar" onclick="history.back(-1);"><a href="#">Volver</a></div></td>
                </tr>
    </table><br />
<br />
<br />
		  <?php }?>
		   <?php if (isset($_POST['nombre_recomendador']) && $_POST['nombre_recomendador']!="")
		   {
		   	if ($envio){?>
			<p style="text-align:center;">Su correo ha sido enviado correctamente, gracias.<br />
			</p><?php }?>
			<?php }?>
		  </td>
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
          <td width="0"><img src="../fotos/general/arroba.jpg" alt="arro" width="10" height="13" /> </td>
          <td class="pie_celda_intro_mail" width="0"><div align="left">coingra.es</div></td>
        </tr>
      </table>
      <a class="pie" href="contacto.php">Contacto</a> | <a class="pie" href="http://72.29.86.55/~coingra/aviso.html" target="popup_1" onclick="window.open(href,target,'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,top=0px,left=0px,width=600px,height=355px'); return false;">Aviso legal</a> | <a class="pie" href="http://validator.w3.org/check?uri=http%3A%2F%2F72.29.86.55%2F~coingra%2Fcorreos%2Frecomendar.php">xhtml 1.0</a> | <a class="pie"href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A//72.29.86.55/~coingra/general.css&amp;usermedium=all">css</a> | <span class="pie_creadopor">Sitio creado por <a class="pie" href="http://72.29.86.55/~coingra/correos/webmaster.php">JFVC</a></span><br /></td>
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
            <td class="menu_clara_tabla_celda_submenu"><a href="../promotora/prom_severo_ochoa/descripcion/promo_01_descripcion.html" target="_parent" class="menu_princ">Residencial Severo Ochoa</a></td>
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