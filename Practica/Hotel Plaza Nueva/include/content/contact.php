<!-- Contact -->
<?php
$contact_html = "";
$contact_array=array(
    "cont_header"=>"Contactanos",
    "FB_page"=>"Nuestra pagina FB"
);
$mail = "info@hotel-plazanueva.com";
$phone = "+34 958 215 273";
$fb_page = "https://www.facebook.com/Hotel-Plaza-Nueva-176542882374100";

$contact_html .= '<section id="contact" class="three">';
    $contact_html .= '<div class="container">';
        $contact_html .= '<header><h2>'.$contact_array["cont_header"].'</h2></header>';
        $contact_html .= '<div class="row">';
            $contact_html .= '<div class="4u 4u(mobile)">';
                $contact_html .= '<a href="'.$fb_page.'" class="no-under">';
                    $contact_html .= '<img src="images/fb.png">';
                    $contact_html .= '<p>'.$contact_array["FB_page"].'</p>';
                $contact_html .= '</a>';
            $contact_html .= '</div>';

            $contact_html .= '<div class="4u 4u(mobile)">';
                $contact_html .= '<a href="skype:'.str_replace(" ", "", $phone).'?call" class="no-under">';
                    $contact_html .= '<img src="images/phone.png">';
                    $contact_html .= '<p>'.$phone.'</p>';
                $contact_html .= '</a>';
            $contact_html .= '</div>';
            $contact_html .= '<div class="4u$ 4u$(mobile)">';
                $contact_html .= '<a href="mailto:'.$mail.'" class="no-under">';
                    $contact_html .= '<img src="images/mail.png">';
                    $contact_html .= '<p>'.$mail.'</p>';
                $contact_html .= '</a>';
            $contact_html .= '</div>';
        $contact_html .= '</div>';

    echo $contact_html;
    include 'include/mailform.php'; 
        
    $contact_html = '</div>';
$contact_html .= '</section>';

echo $contact_html;
?>