<?php
    include('SMTPconfig.php');
    include('SMTPClass.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = 'davidegallitelli@gmail.com';
        $from = $_POST['email'];
        $body = $_POST['message'];
        $body .= "\n\n Phone number: ";
        $body .= $_POST['phone'];
        $SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, "Mail sent from the webpage", $body);
        $SMTPChat = $SMTPMail->SendMail();
    }
?>
<script>
    alert('Thank you <?php echo $_POST["name"]; ?>. Your mail has been received and you will be replied soon to your mail <?php echo $_POST["email"]; ?>.')
</script>