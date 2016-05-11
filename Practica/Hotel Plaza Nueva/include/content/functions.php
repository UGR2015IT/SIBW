<?php
    
    if (isset($_SESSION['user']) && isset($_SESSION['role'])){
        if ($_SESSION['role'] == "A") include 'include/content/functions/admin.php';
        else include 'include/content/functions/user.php';
    } else {
        include 'include/content/modules/login.php';
    }
    
?>