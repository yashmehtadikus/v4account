<?php
date_default_timezone_set('Asia/Kolkata');

define('DATABASE_NAME','v4_site');
define('DATABASE_PASSWORD','');
define('DATABASE_USERNAME','root');
define('DATABASE_HOSTNAME','localhost');
define('API_KEY','AIzaSyBxeVQ7z0PpTX8u_ZByWpNoRCWKohICVb8');
//$conn= mysql_connect(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME) or die("Connection failed: " . mysql_connect_error());


/*$conn=mysql_connect(DATABASE_HOSTNAME,DATABASE_USERNAME,DATABASE_PASSWORD) or die('Connection not valid');
mysql_select_db(DATABASE_NAME,$conn);
mysql_query("set names utf8");
*/

function db () {
$conn = mysqli_connect (DATABASE_HOSTNAME,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME);
return $conn;
}

$conn = db ();

?>