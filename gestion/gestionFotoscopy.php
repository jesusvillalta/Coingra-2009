<?php require_once('../Connections/con1.php'); ?>
<?php

copy ($_FILES["foto1"]["tmp_name"],'c:/Archivos de programa/wamp/www/coingra/gestion/'.$_FILES["foto1"]["name"]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>

<form action="gestionFotoscopy.php" method="post" enctype="multipart/form-data" name="formInsertar">
  fichero
    <input type="file" name="foto1" />
	<input type="hidden" id="tamano" name="tamano" value="100000" />
	
  	<input type="submit" name="Submit" value="Enviar" />
</form>
<p>&nbsp;</p>
</body>
</html>