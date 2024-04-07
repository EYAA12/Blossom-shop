<?php
function Navbar($menu_index){
    $menus = ["Home","Gallery","Account","Buy Now"];
    $links = ["index.html","gallery.html","sign-up","buy.html"];

    $content = "<div class='d-flex mx-auto flex-column flex-lg-row align-items-center'>
        <ul class='navbar-nav'>";
    for ($i = 0; $i < count($menus); $i++) {
        $active_class = ($i == $menu_index) ? "active" : "";
        $content .= "<li class='nav-item $active_class'>
                        <a class='nav-link' href='$links[$i]'>$menus[$i]</a>
                    </li>";
    }
    $content .= "</ul>
                </div>";
    echo $content;
}

?>