<?php
session_start();
require_once '../utils/BddConnect.php';
require_once '../manager/ManagerUtilisateur.php';

$bdd = BddConnect::connexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM utilisateur WHERE mail_utilisateur = :email";
        $stmt = $bdd->prepare($query);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $userRow['password_utilisateur'])) {
                $_SESSION['user_id'] = $userRow['id_utilisateur'];
                $_SESSION['user_nom'] = $userRow['nom_utilisateur'];
                $_SESSION['user_prenom'] = $userRow['prenom_utilisateur'];
                $_SESSION['user_mail'] = $userRow['mail_utilisateur'];

                header("Location: ../vue/view_home.php");
            } else {
                header("Location: ../vue/view_login_page.php?error=invalid_password");
            }
        } else {
            header("Location: ../vue/view_login_page.php?error=invalid_email");
        }
    } else {
        header("Location: ../vue/view_login_page.php?error=missing_fields");
    }
}
