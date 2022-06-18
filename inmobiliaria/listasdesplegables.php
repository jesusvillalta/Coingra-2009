<html>
<head>
</head>
<body>
<?php
if (isset($_POST['tipos']))
{echo "s";}
foreach ($_POST as $indice=>$valor){
  echo "$indice $valor '<br />'";

}

?>
</body>
</html>


