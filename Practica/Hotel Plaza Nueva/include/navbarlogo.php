<div id="logo">
<?php
    $html_img = '<span class="image avatar48"><img src="images/';
    $html_title = "";
    $html_subtitle = "";
    
    if (isset($_SESSION['user']) && isset($_SESSION['role'])){
        // Get temp vars from session
        $temp_user = $_SESSION['user'];
        $temp_role = $_SESSION['role'];
        $temp_name = $_SESSION['nombre'];
        // Show account img if logged
        if ($temp_role == "A") $html_img .= "admin.png";
        else if ($temp_role == "U") $html_img .= "user.jpg";
        else $html_img .= "logo.png";
        // Change title to username and subtitle to link
        $html_title .= "Bienvenido, ".$temp_name;
        $html_subtitle .= "<p><a href='include/actions.php'>Pagina personal</a></p>";
    } else {
        $html_img .= "logo.png";
        $html_title .= "Hotel Plaza Nueva";
        $html_subtitle .= "<p>Granada</p>";
    }
    $html_img .= '" alt="Logo" /></span>';
    echo $html_img;
    echo "<h1>";
    echo $html_title;
    echo "</h1>";
    echo $html_subtitle;
?>
</div>