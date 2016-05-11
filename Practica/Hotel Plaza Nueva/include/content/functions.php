<?php
    
    if (isset($_SESSION['user']) && isset($_SESSION['role'])){
        if ($_SESSION['role'] == "A") include 'include/content/functions/admin.php';
        else include 'include/content/functions/user.php';
    } else {
?>
        <h3> You're not logged in yet. </h3>
        <form id="login-form" action="include/login/checklogin.php" method="POST">
            <input type="text" placeholder="Username" name = "username" id="username-login"/>
            <input type="password" placeholder="Password" name = "pwd" id="pwd" />
            <button type="submit" value="Login">Login</button>
        </form>
<?php
    }
    
?>