<?php

require_once '../utils/BddConnect.php';
require_once '../manager/ManagerUtilisateur.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom_utilisateur'] ?? null;
    $prenom = $_POST['prenom_utilisateur'] ?? null;
    $mail = $_POST['mail_utilisateur'] ?? null;
    $password = $_POST['password_utilisateur'] ?? null;

    if (!empty($nom) && !empty($prenom) && !empty($mail) && !empty($password)) {

        $user = new ManagerUtilisateur($nom, $prenom, $mail, $password);

        if (!$user->getUserByMail()) {

            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $user->setPassword($hash_password);

            $target_dir = "../../public/asset/image/";
            $default_image = "default.jpg";

            if (!empty($_FILES['image_utilisateur']['name'])) {
                $target_file = $target_dir . basename($_FILES['image_utilisateur']['name']);
                move_uploaded_file($_FILES['image_utilisateur']['tmp_name'], $target_file);
                $image_name = basename($_FILES['image_utilisateur']['name']);
            } else {
                $image_name = $default_image;
            }

            $user->setImage("http://localhost/chocoFull/public/asset/image/$image_name");
            $user->insertUser();

            header('refresh:3;url=/ChocoFull/');
            echo 'Bien joué tu vas etre rediriggé dans 3 secs. Sinon, <a href="/ChocoFull/">clique la</a>.';

        } else {
            echo "Un compte avec cette adresse email existe déjà.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Formulaire non soumis.";
}
