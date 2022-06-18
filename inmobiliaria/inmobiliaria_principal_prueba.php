<?php require_once('../Connections/con1.php'); ?>
<?php
mysql_select_db($database_con1, $con1);
$query_destacados = "SELECT `ref`, dormitorios, banios, aseos, m2_construidos, precio, localidad, referencia_de_zona FROM inmuebles";
$destacados = mysql_query($query_destacados, $con1) or die(mysql_error());
/*$row_destacados = mysql_fetch_assoc($destacados);*/
$totalRows_destacados = mysql_num_rows($destacados);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<table border="1">
  <tr>
    <td>ref</td>
    <td>dormitorios</td>
    <td>banios</td>
    <td>aseos</td>
    <td>m2_construidos</td>
    <td>precio</td>
    <td>localidad</td>
    <td>referencia_de_zona</td>
  </tr>
  <?php while ($row_destacados = mysql_fetch_assoc($destacados)) { ?>
    <tr>
      <td><?php echo $row_destacados['ref']; ?></td>
      <td><?php echo $row_destacados['dormitorios']; ?></td>
      <td><?php echo $row_destacados['banios']; ?></td>
      <td><?php echo $row_destacados['aseos']; ?></td>
      <td><?php echo $row_destacados['m2_construidos']; ?></td>
      <td><?php echo $row_destacados['precio']; ?></td>
      <td><?php echo $row_destacados['localidad']; ?></td>
      <td><?php echo $row_destacados['referencia_de_zona']; ?></td>
    </tr>
    <?php } /*while ($row_destacados = mysql_fetch_assoc($destacados));*/ ?>
</table>
</body>
</html>
<?php
mysql_free_result($destacados);
?>
