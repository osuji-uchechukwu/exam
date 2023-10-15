<?php

$hostname="localhost";

$dbuser="root";

$dbpass="";

$dbdatabase="loxjkzbj_edugoglowwebdb";



$db=mysql_connect($hostname,$dbuser,$dbpass) or die("could not connect to the database");

mysql_select_db($dbdatabase, $db) or die("could not select database");



?>



