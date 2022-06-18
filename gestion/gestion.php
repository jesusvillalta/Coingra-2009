<?php require_once('../../Connections/con1.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO inmuebles (`ref`, ref_interna, ref_externa, tipo, dormitorios, salon, banios, aseos, m2_construidos, m2_utiles, precio, foto1, foto2, foto3, foto4, foto5, foto6, foto7, provincia, localidad, zona_o_barrio, direccion, referencia_de_zona, nif_cliente, amueblado, garaje, ascensor, calefaccion, cocina_amueblada, terraza, soleado, areas_deportivas, jardin, piscina, trastero, armarios_empotrados, video_portero, aire_acondicionado, doble_ventana, carpinteria_metalica, alarma, parabolica, chimenea, puerta_blindada, tendedero, linea_telefonica, observaciones, destacado) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['ref'], "int"),
                       GetSQLValueString($_POST['ref_interna'], "text"),
                       GetSQLValueString($_POST['ref_externa'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"),
                       GetSQLValueString($_POST['dormitorios'], "int"),
                       GetSQLValueString($_POST['salon'], "int"),
                       GetSQLValueString($_POST['banios'], "int"),
                       GetSQLValueString($_POST['aseos'], "int"),
                       GetSQLValueString($_POST['m2_construidos'], "int"),
                       GetSQLValueString($_POST['m2_utiles'], "int"),
                       GetSQLValueString($_POST['precio'], "int"),
                       GetSQLValueString($_POST['foto1'], "text"),
                       GetSQLValueString($_POST['foto2'], "text"),
                       GetSQLValueString($_POST['foto3'], "text"),
                       GetSQLValueString($_POST['foto4'], "text"),
                       GetSQLValueString($_POST['foto5'], "text"),
                       GetSQLValueString($_POST['foto6'], "text"),
                       GetSQLValueString($_POST['foto7'], "text"),
                       GetSQLValueString($_POST['provincia'], "text"),
                       GetSQLValueString($_POST['localidad'], "text"),
                       GetSQLValueString($_POST['zona_o_barrio'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['referencia_de_zona'], "text"),
                       GetSQLValueString($_POST['nif_cliente'], "text"),
                       GetSQLValueString($_POST['amueblado'], "text"),
                       GetSQLValueString($_POST['garaje'], "text"),
                       GetSQLValueString($_POST['ascensor'], "text"),
                       GetSQLValueString($_POST['calefaccion'], "text"),
                       GetSQLValueString($_POST['cocina_amueblada'], "text"),
                       GetSQLValueString($_POST['terraza'], "text"),
                       GetSQLValueString($_POST['soleado'], "text"),
                       GetSQLValueString($_POST['areas_deportivas'], "text"),
                       GetSQLValueString($_POST['jardin'], "text"),
                       GetSQLValueString($_POST['piscina'], "text"),
                       GetSQLValueString($_POST['trastero'], "text"),
                       GetSQLValueString($_POST['armarios_empotrados'], "text"),
                       GetSQLValueString($_POST['video_portero'], "text"),
                       GetSQLValueString($_POST['aire_acondicionado'], "text"),
                       GetSQLValueString($_POST['doble_ventana'], "text"),
                       GetSQLValueString($_POST['carpinteria_metalica'], "text"),
                       GetSQLValueString($_POST['alarma'], "text"),
                       GetSQLValueString($_POST['parabolica'], "text"),
                       GetSQLValueString($_POST['chimenea'], "text"),
                       GetSQLValueString($_POST['puerta_blindada'], "text"),
                       GetSQLValueString($_POST['tendedero'], "text"),
                       GetSQLValueString($_POST['linea_telefonica'], "text"),
                       GetSQLValueString($_POST['observaciones'], "text"),
                       GetSQLValueString($_POST['destacado'], "text"));

  mysql_select_db($database_con1, $con1);
  $Result1 = mysql_query($insertSQL, $con1) or die(mysql_error());
}

mysql_select_db($database_con1, $con1);
$query_tipos = "SELECT * FROM tipos";
$tipos = mysql_query($query_tipos, $con1) or die(mysql_error());
$row_tipos = mysql_fetch_assoc($tipos);
$totalRows_tipos = mysql_num_rows($tipos);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Ref_interna:</td>
      <td><input type="text" name="ref_interna" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Ref_externa:</td>
      <td><input type="text" name="ref_externa" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tipo:</td>
      <td><select name="tipo" id="tipo">
        <option value="all" <?php if (!(strcmp("all", "all"))) {echo "selected=\"selected\"";} ?>>seleccionar</option>
        <?php
do {  
?>
        <option value="<?php echo $row_tipos['tipo']?>"<?php if (!(strcmp($row_tipos['tipo'], "all"))) {echo "selected=\"selected\"";} ?>><?php echo $row_tipos['tipo']?></option>
        <?php
} while ($row_tipos = mysql_fetch_assoc($tipos));
  $rows = mysql_num_rows($tipos);
  if($rows > 0) {
      mysql_data_seek($tipos, 0);
	  $row_tipos = mysql_fetch_assoc($tipos);
  }
?>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Dormitorios:</td>
      <td><input type="text" name="dormitorios" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Salon:</td>
      <td><input type="text" name="salon" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Banios:</td>
      <td><input type="text" name="banios" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Aseos:</td>
      <td><input type="text" name="aseos" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">M2_construidos:</td>
      <td><input type="text" name="m2_construidos" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">M2_utiles:</td>
      <td><input type="text" name="m2_utiles" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Precio:</td>
      <td><input type="text" name="precio" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto1:</td>
      <td><input type="text" name="foto1" value="" size="32">
        foto2
      <input type="file" name="f" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto2:</td>
      <td><input type="text" name="foto2" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto3:</td>
      <td><input type="text" name="foto3" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto4:</td>
      <td><input type="text" name="foto4" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto5:</td>
      <td><input type="text" name="foto5" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto6:</td>
      <td><input type="text" name="foto6" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Foto7:</td>
      <td><input type="text" name="foto7" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Provincia:</td>
      <td><input type="text" name="provincia" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Localidad:</td>
      <td><input type="text" name="localidad" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Zona_o_barrio:</td>
      <td><input type="text" name="zona_o_barrio" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Direccion:</td>
      <td><input type="text" name="direccion" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Referencia_de_zona:</td>
      <td><input type="text" name="referencia_de_zona" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nif_cliente:</td>
      <td><input type="text" name="nif_cliente" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Amueblado:</td>
      <td><input type="text" name="amueblado" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Garaje:</td>
      <td><input type="text" name="garaje" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Ascensor:</td>
      <td><input type="text" name="ascensor" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Calefaccion:</td>
      <td><input type="text" name="calefaccion" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Cocina_amueblada:</td>
      <td><input type="text" name="cocina_amueblada" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Terraza:</td>
      <td><input type="text" name="terraza" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Soleado:</td>
      <td><input type="text" name="soleado" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Areas_deportivas:</td>
      <td><input type="text" name="areas_deportivas" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Jardin:</td>
      <td><input type="text" name="jardin" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Piscina:</td>
      <td><input type="text" name="piscina" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Trastero:</td>
      <td><input type="text" name="trastero" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Armarios_empotrados:</td>
      <td><input type="text" name="armarios_empotrados" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Video_portero:</td>
      <td><input type="text" name="video_portero" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Aire_acondicionado:</td>
      <td><input type="text" name="aire_acondicionado" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Doble_ventana:</td>
      <td><input type="text" name="doble_ventana" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Carpinteria_metalica:</td>
      <td><input type="text" name="carpinteria_metalica" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Alarma:</td>
      <td><input type="text" name="alarma" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Parabolica:</td>
      <td><input type="text" name="parabolica" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Chimenea:</td>
      <td><input type="text" name="chimenea" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Puerta_blindada:</td>
      <td><input type="text" name="puerta_blindada" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tendedero:</td>
      <td><input type="text" name="tendedero" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Linea_telefonica:</td>
      <td><input type="text" name="linea_telefonica" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Observaciones:</td>
      <td><input type="text" name="observaciones" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Destacado:</td>
      <td><input type="text" name="destacado" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insertar registro"></td>
    </tr>
  </table>
  <input type="hidden" name="ref" value="">
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($tipos);
?>
