<?php
    echo '<div id="main">';

    if (!empty($_GET['seccion'])) { 
        $seccion = $_GET['seccion'];  
        $seccion = basename($seccion);
        if (file_exists("content/$seccion.php")) {$seccion = "home";}
        include("content/$seccion.php");  
    } else 
        include('content/home.php');
    
    echo '</div>';
?>