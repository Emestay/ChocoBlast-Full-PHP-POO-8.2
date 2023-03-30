
<?php
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine
$path = $url['path'] ?? '/';

switch($path){
    //route /chocoblast/accueil -> ./App/controler/ControlerAccueil.php
    case $path === "/ChocoFull/" or $path === "/ChocoFull/Home" :
        include './app/vue/view_home.php';
        break ;
//route /chocoblast/inscription -> ./App/controler/ControlerAddUser.php
    case $path === "/ChocoFull/Login" :
        include './app/vue/view_login_page.php';
        break ;
//route /chocoblast/test -> ./App/controler/ControlerTest.php
    case $path === "/ChocoFull/Signup":
        include './app/vue/view_add_user.php';
        break ;
    case $path === "/ChocoFull/Users":
        include './app/vue/view_list_user.php';
        break ;
//si rien ne correspond : route -> ./App/controler/Controler404.php
    //default :
        //include './App/controler/Controler404.php';
}
