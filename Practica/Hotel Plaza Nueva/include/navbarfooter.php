<!--- CONTACTS SECTION -->
<?php

    $contacts_html = "";

    $contacts_html.='<div class="contacts">';
        $contacts_html.='<ul>';
            $contacts_html.="<li><a id='call-us' class='skel-layers-ignoreHref no-bottom' href='skype:+34958215273?call'><span class='icon fa-phone'>+34 958 215 273</span></a></li>";
            $contacts_html.="<li><a id='mail-us' class='skel-layers-ignoreHref' href='mailto:mynewmailfortests@gmail.com'><span class='icon fa-envelope'>info@hotel-plazanueva.com</span></a></li>";
            $contacts_html.="<li><a id='find-us' class='skel-layers-ignoreHref' href='http://maps.google.com/?q= Calle Imprenta, 2, Granada' target='_blank'><span class='icon fa-map'>Calle Imprenta, 2, Granada (ES)</span></a></li>";
        $contacts_html.="</ul>";       
    $contacts_html.="</div>";

    echo $contacts_html;
            
?>