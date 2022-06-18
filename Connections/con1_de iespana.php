<?php
# FileName="Connection_php_mysql.html"
# Type="MYSQL"
# HTTP="true"
$hostname_con1 = "imysql01";
$database_con1 = "i4036687";
$username_con1 = "i4036687";
$password_con1 = "7f442zgtpt7t739m";
$con1 = mysql_pconnect($hostname_con1, $username_con1, $password_con1) or trigger_error(mysql_error(),E_USER_ERROR); 
?>