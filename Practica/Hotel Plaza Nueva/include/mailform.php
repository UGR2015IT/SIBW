<form method="post" action="include/mailsend/send.php">
    <div class="row">
        <div class="4u 12u$(mobile)"><input type="text" name="name" placeholder="Nombre y Appellidos" /></div>
        <div class="4u 12u$(mobile)"><input type="text" name="phone" placeholder="Telefono" /></div>
        <div class="4u$ 12u$(mobile)"><input id="form-email" type="email" name="email" placeholder="Email" onkeyup="validateEmail(this.value, this.id)" /></div>
        <div class="12u$">
            <textarea name="message" placeholder="Message"></textarea>
        </div>
        <div class="12u$">
            <input type="submit" value="Enviar" />
        </div>
    </div>
</form>