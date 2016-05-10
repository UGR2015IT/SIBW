<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="plaza_nueva"; // Database name 

// Connect to server and select databse.
$mysql_connect = new mysqli("$host", "$username", "$password","$db_name");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>