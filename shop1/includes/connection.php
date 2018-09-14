<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'eu-cdbr-west-02.cleardb.net');
define('DB_USERNAME', 'be1251cea96efe');
define('DB_PASSWORD', 'f9393f52');
define('DB_NAME', 'heroku_421c90367cd9a12');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

