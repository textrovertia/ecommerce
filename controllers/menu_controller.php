<?php
require_once '../classes/Menu.php';

function create_menu($page="index", $user_role=2){
    $menu = new Menu();
    return $menu->get_html();

}
