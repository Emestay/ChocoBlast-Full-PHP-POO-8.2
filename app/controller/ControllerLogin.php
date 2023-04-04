<?php

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

                header("Location: ./");
            } else {
                header("Location: ./Login?error=invalid_password");
            }
        } else {
            header("Location: ./Login?error=invalid_email");
        }
    } else {
        header("Location: ./Login?error=missing_fields");
    }
}
$errorMsg = '';
$error = $_GET['error'] ?? '';


switch ($error) {
    case 'invalid_password':
        $errorMsg = 'Mot de passe incorrect.';
        break;
    case 'invalid_email':
        $errorMsg = "L'email n'est pas valide.";
        break;
    case 'missing_fields':
        $errorMsg = 'Veuillez remplir tous les champs.';
        break;
}

// En bas de page j'include la vue

include 'app/vue/view_login_page.php';
