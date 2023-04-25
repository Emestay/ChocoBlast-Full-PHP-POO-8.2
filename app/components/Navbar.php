<?php
$isLoggedIn = isset($_SESSION['user_id']);
?>
<nav class="fixed top-0 w-full z-40 bg-gradient-to-r from-emerald-400 to-sky-400 text-white px-4 py-4 shadow-md">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <a href="/ChocoFull/" class="flex items-center ">
                <img src="./public/asset/image/icone.png" alt="Logo" class="w-12 h-12">
                <h1 class="text-2xl font-bold text-amber-300 text-shadow">HOCOBLAST</h1>
            </a>
            <div class="hidden md:flex items-center space-x-4">

        <ul class="hidden md:flex items-center space-x-4 justify-items-end">
            <?php if ($isLoggedIn): ?>
                <li>
                    <a href="./Commentaire" class="text-lg font-medium hover:text-yellow-200 flex items-center">
                        <i class="fas fa-bomb text-2xl mr-2"></i>
                        Commentaires
                    </a>
                </li>
                <li>
                    <a href="./Users" class="text-lg font-medium hover:text-yellow-200 flex items-center">
                        <i class="fas fa-users text-2xl mr-2"></i>
                        Liste des utilisateurs
                    </a>
                </li>
                <li>
                    <a href="./Logout" class="text-lg font-medium hover:text-yellow-200 flex items-center">
                        <i class="fas fa-sign-out-alt text-2xl mr-2"></i>
                        Déconnexion
                    </a>
                </li>
            <?php else: ?>
                <li>
                    <a href="./Signup" class="text-lg font-medium hover:text-yellow-200 flex items-center">
                        <i class="fas fa-user-plus text-2xl mr-2"></i>
                        Inscription
                    </a>
                </li>
                <li>
                    <a href="./Login" class="text-lg font-medium hover:text-yellow-200 flex items-center">
                        <i class="fas fa-user text-2xl mr-2"></i>
                        Connexion
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
            <button class="md:hidden focus:outline-none" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>

        </div>

    <ul class="nav-menu md:hidden p-4 space-y-4 bg-gradient-to-r from-emerald-400 to-sky-400 text-white">
        <?php if ($isLoggedIn): ?>
            <li>
                <a href="/ChocoFull/Users" class="hover:text-yellow-200 flex items-center">
                    <i class="fas fa-users mr-2"></i>
                    Liste des utilisateurs
                </a>
            </li>
            <li>
                <a href="./app/controller/ControllerLogout.php" class="hover:text-yellow-200 flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Déconnexion
                </a>
            </li>
        <?php else: ?>
            <li>
                <a href="/ChocoFull/Signup" class="hover:text-yellow-200 flex items-center">
                    <i class="fas fa-user-plus mr-2"></i>
                    Inscription
                </a>
            </li>
            <li>
                <a href="/ChocoFull/Login" class="hover:text-yellow-200 flex items-center">
                    <i class="fas fa-user mr-2"></i>
                    Connexion
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>


<script>
    function toggleMenu() {
        const navMenu = document.querySelector('.nav-menu');
        navMenu.classList.toggle('show');
    }
</script>

<style>
    .nav-menu {
        display: none;
    }

    .nav-menu.show {
        display: block;
    }

     .text-shadow {
         text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
         padding-left: -30px;
     }

</style>

