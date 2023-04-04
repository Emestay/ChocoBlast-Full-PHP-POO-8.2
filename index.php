<?php

$url = parse_url($_SERVER['REQUEST_URI']);
$path = $url['path'] ?? '/';

switch($path){

    case $path === "/ChocoFull/" or $path === "/ChocoFull/Home" :
        include './app/vue/view_home.php';
        break ;

    case $path === "/ChocoFull/Login" :
        include './app/vue/view_login_page.php';
        break ;

    case $path === "/ChocoFull/Signup":
        include './app/vue/view_add_user.php';
        break ;
    case $path === "/ChocoFull/Users":
        include './app/vue/view_list_user.php';
        break ;

    //default :
        //include './App/controler/Controler404.php';
}
