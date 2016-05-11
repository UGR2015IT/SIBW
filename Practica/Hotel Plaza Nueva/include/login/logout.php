<?php
    session_start();
    if (isset($_SESSION['user'])){
        unset($_SESSION['user']);
        session_destroy();
    } else {
        echo '<p>You\'re already logged out.</p>';
    }
    header("Location: ../../index.php");

?>