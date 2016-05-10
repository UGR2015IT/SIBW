<!-- NAVIGATION BAR / CONTESTUAL MENU -->
<?php
    
    class NavMenu {
        
        protected $myMenu = array();
        
        public function populateMenu(){
            // Require connection to DB
            require_once 'include/connection.php';
            
            // Loading menu from DB
            $tbl_name="menu"; // Table name 
            $mysqli = "SELECT * FROM $tbl_name ORDER BY 'cod' ASC;";
            $result = $mysql_connect -> query($mysqli);
            
            // And filling the array
            while( $row = $result -> fetch_array() ){
                $this->myMenu[] = $row;
            }
            //print_r($this->myMenu);
            
        }
        
        public function menuPrint(){
            // The function will print the menu filled from the DB
            $html = "<ul>";
            foreach((array) $this->myMenu as $item) {
                if(!empty($_GET['seccion'])){
                    $mySection = $_GET['seccion'];
                    $mySection = basename($mySection);
                } else $mySection = "home";
                if ($item[2] != $mySection)
                    $html .= "<li><a href='?seccion={$item[2]}' id='link' class='skel-layers-ignoreHref'><span class='icon {$item[3]}'>{$item[1]}</span></a></li>\n";
            }
            $html .= "</ul>";
            echo $html;
        }
        
        function __construct(){
            // Function Constructor: populates the private array
            $this->populateMenu();
            $this->menuPrint();
        }
    };

    echo '<div id="header">';
        echo '<div class="top">';
            //Logo
            include 'navbarlogo.php'; 
            echo '<nav id="nav">';
            $newMenu = new NavMenu();
            echo '</nav>';
        echo '</div>';

        echo '<div id="nav" class="bottom">';
        // Slider in the navbar
        include 'navbarslider.php';

        // Footer of the navbar
        include 'navbarfooter.php';
        echo '</div>';
    echo '</div>';
    
?>