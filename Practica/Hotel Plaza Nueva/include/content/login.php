<?php
session_start();
?>

<h3> Login Module </h3>
<form id="login-form" action="include/login/checklogin.php" method="POST">
    <input type="text" placeholder="Username" name = "username" id="username-login"/>
    <input type="password" placeholder="Password" name = "pwd" id="pwd" />
    <button type="submit" value="Login">Login</button>
</form>

<br /><br />

<h3> Registration Module </h3>
<form id="register-form" action="include/login/register.php" method="POST">
    <input type="text" name="name" placeholder="Nombre" id="name" required="required" />
    <input type="text" name="appelidos" placeholder="Appelidos" id="appelidos" required="required"/>
    <input type="email" name="mail" placeholder="Correo" id="mail" required="required" onkeyup="validateEmail(this.value, this.id)"/>
    <input type="text" name="username" placeholder="Username" id="username-register" required="required"/>
    <input type="password" name="password" placeholder="Password" id="password" required="required"/>
    <button type="submit" value="Register">Register</button>
</form>

<br /><br />

<?php
    if (isset($_SESSION['user'])){
        echo '<p>Currently logged as ' . htmlentities($_SESSION['user']) . ', which has role: '.htmlentities($_SESSION['role']).'.</p>';
    } else { echo '<p>You\'re not logged in</p>'; }
?>
<form id="logout" action="include/login/logout.php" method="POST">
    <button type="submit">Logout</button>
</form>