<?php require_once('../Connections/con1.php'); ?>
<?php
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
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="gestionTipos.php">
  tipos
  <select name="tipo" id="tipo">
  <option value="all">seleccionar</option>
    <?php
do {  
?>
    <option value="<?php echo $row_tipos['tipo']?>"><?php echo $row_tipos['tipo']?></option>
    <?php
} while ($row_tipos = mysql_fetch_assoc($tipos));
  $rows = mysql_num_rows($tipos);
  if($rows > 0) {
      mysql_data_seek($tipos, 0);
	  $row_tipos = mysql_fetch_assoc($tipos);
  }
?>
  </select>
insertar
<input type="submit" name="Submit" value="Enviar" />

</form>
<?php 
echo $_POST['tipo']; 
?>
</body>
</html>
<?php
mysql_free_result($tipos);
?>
