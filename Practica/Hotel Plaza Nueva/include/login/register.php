<?php

    include "../connection.php";

    // Define post variables
    $myusername=$_POST['username']; 
    $mypassword=$_POST['password'];
    $mymail=$_POST['mail'];
    $myname=$_POST['name'];
    $myappelidos=$_POST['appelidos'];
    
    // Define return string
    $myreturn = "";

    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = $mysql_connect -> real_escape_string($myusername);
    $mypassword = $mysql_connect -> real_escape_string($mypassword);
    
    // Encrypting PWD
    $mypassword = hash('sha512', $mypassword);
    
    // Checking if username already exists
    $tbl_name="users"; // Table name 
    $check_query = "SELECT * FROM $tbl_name WHERE username = '$myusername' OR mail = '$mymail'";
    $result = $mysql_connect -> query($check_query);
    $count = $result -> num_rows;
    
    if ($count > 0) {
        $myreturn = "The username or the mail already exists in the database.";
        $result -> close();
    } else {
        $result -> close();
        //Building the query
        $register_query="INSERT INTO $tbl_name (username,password,nombre,appelidos,mail,role) VALUES ('$myusername','$mypassword', '$myname', '$myappelidos', '$mymail', \"U\")";
        $result = $mysql_connect -> query($register_query);
        
        // get affected rows
        $count = $mysql_connect -> affected_rows;
        
        if ($count > 0){
            $myreturn = "Registration complete.";
        } else {
            $myreturn = "Something went wrong.";
        }
    }

    // Close Connection 
    $mysql_connect -> close();
    ob_end_flush();
    
    // Return
    echo $myreturn;    
?>