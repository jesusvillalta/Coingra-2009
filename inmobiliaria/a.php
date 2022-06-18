<html>
<head>
</head>
<body>
<?php
if (!isset($_POST['tipos']))
{echo '$_post no existe';}
else {echo '$_post existe';}
foreach ($_POST as $indice=>$valor){
  echo $indice .$valor .'<br />';

}
?>
</body>
</html>


