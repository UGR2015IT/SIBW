<h3> Registration Module </h3>
<form id="register-form" action="include/login/register.php" method="POST">
    <input type="text" name="name" placeholder="Nombre" id="name" required="required" />
    <input type="text" name="appelidos" placeholder="Appelidos" id="appelidos" required="required"/>
    <input type="email" name="mail" placeholder="Correo" id="mail" required="required" onkeyup="validateEmail(this.value, this.id)"/>
    <input type="text" name="username" placeholder="Username" id="username-register" required="required"/>
    <input type="password" name="password" placeholder="Password" id="password" required="required"/>
    <button type="submit" value="Register">Register</button>
</form>