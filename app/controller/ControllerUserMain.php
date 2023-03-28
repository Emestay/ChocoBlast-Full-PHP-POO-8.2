<?php
require_once '../utils/BddConnect.php';
require_once '../model/utilisateur.php';

function listUsers()
{
    $bdd = BddConnect::connexion();
    $stmt = $bdd->query("SELECT * FROM utilisateur");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}


function deleteUser($id)
{
    $bdd = BddConnect::connexion();
    $stmt = $bdd->prepare("DELETE FROM utilisateur WHERE id_utilisateur = ?");
    $stmt->execute([$id]);
    header('Location: http://localhost/chocoFull/app/vue/view_list_user.php');
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

