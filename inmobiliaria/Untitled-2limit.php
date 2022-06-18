<?php require_once('../../Connections/con1.php'); ?>
<?php
$maxRows_Recordset1 = 2;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_con1, $con1);
$query_Recordset1 = "SELECT ref_interna, tipo, dormitorios, m2_construidos, precio, foto1, provincia, localidad, zona_o_barrio FROM inmuebles";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $con1) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table border="1">
  <tr>
    <td>ref_interna</td>
    <td>tipo</td>
    <td>dormitorios</td>
    <td>m2_construidos</td>
    <td>precio</td>
    <td>foto1</td>
    <td>provincia</td>
    <td>localidad</td>
    <td>zona_o_barrio</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['ref_interna']; ?></td>
      <td><?php echo $row_Recordset1['tipo']; ?></td>
      <td><?php echo $row_Recordset1['dormitorios']; ?></td>
      <td><?php echo $row_Recordset1['m2_construidos']; ?></td>
      <td><?php echo $row_Recordset1['precio']; ?></td>
      <td><?php echo $row_Recordset1['foto1']; ?></td>
      <td><?php echo $row_Recordset1['provincia']; ?></td>
      <td><?php echo $row_Recordset1['localidad']; ?></td>
      <td><?php echo $row_Recordset1['zona_o_barrio']; ?></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
