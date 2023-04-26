<?php

use JetBrains\PhpStorm\NoReturn;

function listUsers(): bool|array
{
    $bdd = BddConnect::connexion();
    $stmt = $bdd->query("SELECT * FROM utilisateur");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}


#[NoReturn] function deleteUser($id): void
{
    $bdd = BddConnect::connexion();
    $stmt = $bdd->prepare("DELETE FROM utilisateur WHERE id_utilisateur = ?");
    $stmt->execute([$id]);
    header('Location: ./Users');
    exit();
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'listUsers') {
        listUsers();
    }
} elseif (isset($_POST['delete'])) {
    $id = $_POST['id'] ?? null;
    if (!empty($id)) {
        deleteUser($id);
    }
}
$users = listUsers();
include  './app/vue/view_list_user.php';

