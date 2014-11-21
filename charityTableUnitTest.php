<?php 
$connection = mysql_connect("url", "database");
if (!$connection) {
	die("Could not connect: " . mysql_error());
}

mysql_select_db("database_name", $connection);

if (! mysql_query("SELECT * from table CharityAccounts")) {
	echo "Test failed";
}
?>