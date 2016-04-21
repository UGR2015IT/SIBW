<?php
    require_once ("class.phpmailer.php");
    include ("class.smtp.php");
    $Correo = new PHPMailer();
    $Correo->IsSMTP();
    $Correo->SMTPAuth = true;
    $Correo->SMTPSecure = "tls";
    $Correo->SMTPDebug = 0;
    $Correo->Host = "smtp.gmail.com";
    $Correo->Port = 587;
    $Correo->Username = "mynewmailfortests@gmail.com";
    $Correo->Password = "#";
    $Correo->SetFrom($_POST['email'],$_POST['name']);
    $Correo->FromName = "Hotel Plaza Nueva";
    $Correo->AddAddress($_POST['email']);
    $Correo->AddAddress("mynewmailfortests@gmail.com");
    $Correo->Subject = "Hemos recibido tu correo.";
    $Correo->Body = "<H3>Gracias,{$_POST['name']}, para habernos enviado este correo!</H3>
        <p>El texto de tu correo es:</p>
        ".$_POST['message']."<br />
        <p>Vamos a leerlo cuanto antes posible y te contestaremo super rapido!</p>
        <br />
        <i>Hotel Plaza Nueva</i>";
    $Correo->IsHTML (true);
    if (!$Correo->Send())
    {
        echo "Error: $Correo->ErrorInfo";
    } else {
        echo "Message Sent!";
    }
?>