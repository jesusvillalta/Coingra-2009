<?php
# FileName="Connection_php_mysql.html"
# Type="MYSQL"
# HTTP="true"
$hostname_con1 = "localhost";
$database_con1 = "coingra_coingra";
$username_con1 = "coingra";
$password_con1 = "St27v8Ws";
$con1 = mysql_pconnect($hostname_con1, $username_con1, $password_con1) or trigger_error(mysql_error(),E_USER_ERROR); 
?>