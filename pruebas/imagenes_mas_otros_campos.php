<?php require_once('../Connections/con1.php'); ?>
<?php
mysql_select_db($database_con1, $con1);
$query_Recordset1 = "SELECT foto_exterior,ref FROM inmuebles where ref=1";
$Recordset1 = mysql_query($query_Recordset1, $con1) or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
while ($result_array = mysql_fetch_array($Recordset1)){
	/*header("Content-Type: image/jpeg");*/
	echo $result_array['foto_exterior'];

	echo $result_array['ref'];
}
?>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

