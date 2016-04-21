<?php
    // Array for the internationalization/localization of the webpage
    $placheholders = array(
        "name"=>"Nombre y Appelidos",
        "phone"=>"Telefono",
        "mail"=>"Correo",
        "msg"=>"Mensaje",
        "send"=>"Enviar"
    );
    $form_html = "";

    $form_html .= '<form method="post" action="include/mailsend/phpmailer.php">';
        $form_html .= '<div class="row">';
            $form_html .= '<div class="4u 12u$(mobile)"><input type="text" name="name" placeholder='.$placheholders['name'].'></div>';
            $form_html .= '<div class="4u 12u$(mobile)"><input type="text" name="phone" placeholder='.$placheholders['phone'].'></div>';
            $form_html .= '<div class="4u$ 12u$(mobile)"><input id="form-email" type="email" name="email" placeholder='.$placheholders['mail'].' onkeyup="validateEmail(this.value, this.id)" ></div>';
            $form_html .= '<div class="12u$">';
                $form_html .= '<textarea name="message" placeholder='.$placheholders['msg'].'></textarea>';
            $form_html .= '</div>';
            $form_html .= '<div class="12u$">';
                $form_html .= '<input type="submit" value='.$placheholders['send'].' >';
            $form_html .= '</div>';
       $form_html .= ' </div>';
    $form_html .= '</form>';

echo $form_html;
    
?>