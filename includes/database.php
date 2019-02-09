<?php
require dirname(__FILE__) . "/utils.php";

// admin account
$ADMIN_ACCOUNT_NAME = "admin";				// username
$ADMIN_ACCOUNT_PASSWORD = "";				// password

// static global variables
$height_from_top = "2%";
$panel_name = "Tournament";					// site name
$welcome_msg = "Welcome to the Tournament"; // description

//sql db details
$db_server = '';							// database ip
$db_name = '';								// database name
$db_username = '';							// database username
$db_password = '';							// database password

try {
	$GLOBALS['db'] = new PDO('mysql:host=' . $db_server . ';dbname=' . $db_name, $db_username, $db_password,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
}
catch(PDOException $e) 
{
	die('error');
}

?>