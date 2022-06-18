<?php 
function refInternaInsertar() {

 return date("dmYhis");
}

?>









<?php /*?>
function refInternaInsertar() {

require_once('../../Connections/con1.php'); 

mysql_select_db($database_con1, $con1);
$query_Recordset1 = "SELECT ref,ref_interna FROM inmuebles";
$Recordset1 = mysql_query($query_Recordset1, $con1) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$fin='no';
 
	while(($row_Recordset1['ref_interna']==$row_Recordset1['ref']) && ( mysql_fetch_assoc($Recordset1)))
			{$row_Recordset1 = mysql_fetch_assoc($Recordset1);}
			
	if($totalRows_Recordset1 == $row_Recordset1['ref']){
		$refInternaInsertar=$row_Recordset1['ref']+1;}
	else{	
	$refInternaInsertar=$row_Recordset1['ref'];
	}
	return $refInternaInsertar;
 }
<?php */?>