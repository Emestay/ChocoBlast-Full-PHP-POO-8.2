<?php

require_once '../model/utilisateur.php';
require_once '../utils/BddConnect.php';

class ManagerUtilisateur extends Utilisateur
{
    public function getUserByMail()
    {
        try {
            $mail = $this->getMail();
            $bdd = BddConnect::connexion();
            $req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail_utilisateur = :mail");
            $req->bindParam(':mail', $mail);
            $req->execute();
            $data = $req->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "Bug =>  " . $e->getMessage();
        }
    }

    public function insertUser()
    {
        try {
            $nom = $this->getNom();
            $prenom = $this->getPrenom();
            $mail = $this->getMail();
            $password = $this->getPassword();
            $image = $this->getImage();
            $statut = $this->getStatut();
            $role = $this->getRole();

            $bdd = BddConnect::connexion();
            $stmt = $bdd->prepare("INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, mail_utilisateur, password_utilisateur, image_utilisateur, statut_utilisateur, id_roles) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $mail, $password, $image, $statut, $role]);
        } catch (PDOException $e) {
            echo "probleme " . $e->getMessage();
        }
    }

}
