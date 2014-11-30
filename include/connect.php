 <?php
 
$host = 'localhost';
$database = 'travel';
$username = 'root';
$password = '';

$connection = mysql_connect($host, $username, $password) or die($connection);
mysql_select_db($database, $connection);