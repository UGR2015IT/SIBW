<section id="admin" class="two">
        <h1>Bienvenido, <?php echo $_SESSION['user'] ?></h1>
        <h4>Gestion Hotel</h4>
        <ul>
            <li>Habitaciones</li>
            <ul>
                <li>Quadrante stanze</li>
                <li>Inserisci nuove stanze</li>
            </ul>
            <li>Promociones</li>
            <ul>
                <li>Visualizza/Modifica</li>
                <li>Aggiungi</li>
                <li>Elimina</li>
            </ul>
            <li>Actividades</li>
        </ul>
        <br />
        <h4>Reservas</h4>
        <ul>
            <li>Visualizar</li>
            <li>Insertar</li>
            <li>Modificar</li>
            <li>Borrar</li>
        </ul>
        <br />
        <h4>Usuarios</h4>
        <ul>
            <li>Visualizar</li>
            <li>Insertar</li>
            <li>Modificar</li>
            <li>Borrar</li>
        </ul>
        
        <?php
    include 'include/content/modules/logout.php';
?>
        
</section>