<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>

<!-- navbar.php -->
<nav class="bg-gradient-to-r from-indigo-400 to-purple-600 text-white px-4 py-4 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <a href="/ChocoFull/" class="font-bold text-lg">
                <i class="fa-solid fa-envelope text-2xl"></i> Chocoblast
            </a>
        </div>
        <ul class="hidden md:flex items-center space-x-4">
            <?php if ($isLoggedIn): ?>
                <li>
                    <a href="/ChocoFull/Users" class="hover:text-purple-900 flex items-center">
                        <i class="fas fa-users mr-2"></i>
                        Liste des utilisateurs
                    </a>
                </li>
                <li>
                    <a href="./app/controller/ControllerLogout.php" class="hover:text-purple-900 flex items-center">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Déconnexion
                    </a>
                </li>
            <?php else: ?>
                <li>
                    <a href="/ChocoFull/Signup" class="hover:text-purple-900 flex items-center">
                        <i class="fas fa-user-plus mr-2"></i>
                        Inscription
                    </a>
                </li>
                <li>
                    <a href="/ChocoFull/Login" class="hover:text-purple-900 flex items-center">
                        <i class="fas fa-user mr-2"></i>
                        Connexion
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        <button class="md:hidden focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>



