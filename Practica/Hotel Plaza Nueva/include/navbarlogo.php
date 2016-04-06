<?php 
    echo '<div id="logo">';
    echo '<span class="image avatar48"><img src="images/logo.png" alt="Logo" /></span>';
    $html = "<h1 id='title'>";
    if (!empty($_GET['seccion'])) {
        $seccion = $_GET['seccion'];
        $seccion = basename($seccion);
        if ($seccion != "home")
            $html .= "<a href='?seccion=home'>Hotel Plaza Nueva</a>";
        else $html .= "Hotel Plaza Nueva";
    } else $html .= "Hotel Plaza Nueva";
    $html .= "</h1>";
    echo $html;
    echo '<p>Granada</p>';
    echo '</div>';
?>