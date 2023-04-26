<?php
session_start();
require_once 'app/requireAll.php';

ob_start();
include 'app/components/Navbar.php';
$navbar = ob_get_contents();
ob_end_clean();


$url = parse_url($_SERVER['REQUEST_URI']);
$path = $url['path'] ?? '/';

switch ($path) {

    case $path === "/ChocoFull/" or $path === "/ChocoFull/Home" :
        include './app/controller/ControllerHome.php';
        break;

    case $path === "/ChocoFull/Login" :
        include './app/controller/ControllerLogin.php';
        break;

    case $path === "/ChocoFull/Signup":
        include './app/controller/ControllerAddUser.php';
        break;
    case $path === "/ChocoFull/Users":
        include './app/controller/ControllerUserMain.php';
        break;
    case $path === "/ChocoFull/Logout":
        include "./app/controller/ControllerLogout.php";
        break;
    case $path === "/ChocoFull/Commentaire":
        include "./app/controller/ControllerCommentaire.php";
        break;

    default :
        include './app/controller/Controller404.php';
}
