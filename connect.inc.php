<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

$mysql_db='new_database';
if(@(mysql_connect($mysql_host,$mysql_user,$mysql_password))&&(@(mysql_select_db($mysql_db)))){
	
} 
  else{
	  echo mysql_error();
	
}
?>