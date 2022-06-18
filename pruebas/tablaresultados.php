<?php require_once('../Connections/con1.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_resultados = 2;
$pageNum_resultados = 0;
if (isset($_GET['pageNum_resultados'])) {
  $pageNum_resultados = $_GET['pageNum_resultados'];
}
$startRow_resultados = $pageNum_resultados * $maxRows_resultados;

mysql_select_db($database_con1, $con1);
$query_resultados = "SELECT tipo, dormitorios, m2_construidos, precio, provincia, localidad, zona_o_barrio FROM inmuebles where tipo = 'piso'";
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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<table border="0" width="50%" align="center">
  <tr>
    <td width="23%" align="center"><?php if ($pageNum_resultados > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, 0, $queryString_resultados); ?>"><img src="First.gif" border=0></a>
          <?php } // Show if not first page ?>
    </td>
    <td width="31%" align="center"><?php if ($pageNum_resultados > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, max(0, $pageNum_resultados - 1), $queryString_resultados); ?>"><img src="Previous.gif" border=0></a>
          <?php } // Show if not first page ?>
    </td>
    <td width="23%" align="center"><?php if ($pageNum_resultados < $totalPages_resultados) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, min($totalPages_resultados, $pageNum_resultados + 1), $queryString_resultados); ?>"><img src="Next.gif" border=0></a>
          <?php } // Show if not last page ?>
    </td>
    <td width="23%" align="center"><?php if ($pageNum_resultados < $totalPages_resultados) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_resultados=%d%s", $currentPage, $totalPages_resultados, $queryString_resultados); ?>"><img src="Last.gif" border=0></a>
          <?php } // Show if not last page ?>
    </td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($resultados);
?>
