<?php
session_start();
require_once 'app/requireAll.php';


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

    //default :
    //include './App/controler/Controler404.php';
}
