<?php

include '../connection.php';
session_start();
// Define $myusername and $mypassword 
$myusername=$_POST['username']; 
$mypassword=$_POST['pwd']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = $mysql_connect -> real_escape_string($myusername);
$mypassword = $mysql_connect -> real_escape_string($mypassword);

//Encrypting password
$mypassword = hash('sha512', $mypassword);

//Building the query
$tbl_name="users"; // Table name 
$login_query="SELECT nombre,role FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result= $mysql_connect -> query($login_query);

// num_rows is counting table row corresponding to the query
$count= $result -> num_rows;

// Get the role of the user
$query_result = $result -> fetch_row();

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
    
    $_SESSION = array();

// The user is in the DB, so you can login
    $_SESSION['user'] = $myusername;
    $_SESSION['role'] = $query_result[1];
    $_SESSION['nombre'] = $query_result[0];
    $myreturn = "Login successful!";
}
else {
    $myreturn = "Wrong Username or Password";
}
$result -> close();
$mysql_connect -> close();
header('Location: ../../index.php?seccion=functions');
?>