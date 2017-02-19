<?php
define('DB_SERVER', 'mysql17.unoeuro.com');
define('DB_USERNAME', 'bareaender_dk0');    // DB username
define('DB_PASSWORD', '1Nygummiand');    // DB password
define('DB_DATABASE', 'bareaender_dk0_db2');      // DB name
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die( "Unable to connect");

?>