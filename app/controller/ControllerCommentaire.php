<?php

class CommentaireController
{
    public static function addCommentaire(Commentaire $commentaire): void
    {
        $db = BddConnect::connexion();
        $stmt = $db->prepare("INSERT INTO commentaire (note_commentaire, text_commentaire, date_commentaire, statut_commentaire, id_chocoblast, auteur_commentaire) VALUES (:note_commentaire, :text_commentaire, :date_commentaire, :statut_commentaire, :id_chocoblast, :auteur_commentaire)");

        $noteCommentaire = $commentaire->getNoteCommentaire();
        $textCommentaire = $commentaire->getTextCommentaire();
        $dateCommentaire = $commentaire->getDateCommentaire();
        $statutCommentaire = $commentaire->getStatutCommentaire();
        $idChocoblast = $commentaire->getIdChocoblast();
        $auteurCommentaire = $commentaire->getAuteurCommentaire();

        $stmt->bindParam(':note_commentaire', $noteCommentaire, PDO::PARAM_INT);
        $stmt->bindParam(':text_commentaire', $textCommentaire, PDO::PARAM_STR);
        $stmt->bindParam(':date_commentaire', $dateCommentaire, PDO::PARAM_STR);
        $stmt->bindParam(':statut_commentaire', $statutCommentaire, PDO::PARAM_BOOL);
        $stmt->bindParam(':id_chocoblast', $idChocoblast, PDO::PARAM_INT);
        $stmt->bindParam(':auteur_commentaire', $auteurCommentaire, PDO::PARAM_INT);

        $stmt->execute();
    }

    public static function getAllCommentaires(): array
    {
        $db = BddConnect::connexion();
        $stmt = $db->query("SELECT * FROM commentaire");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $commentaires = [];
        foreach ($result as $row) {
            $commentaire = new Commentaire(
                $row['id_commentaire'],
                $row['note_commentaire'],
                $row['text_commentaire'],
                $row['date_commentaire'],
                $row['statut_commentaire'],
                $row['id_chocoblast'],
                $row['auteur_commentaire']
            );
            $commentaires[] = $commentaire;
        }
        return $commentaires;
    }

    public static function deleteCommentaire(int $id_commentaire): void
    {
        $db = BddConnect::connexion();
        $stmt = $db->prepare("DELETE FROM commentaire WHERE id_commentaire = :id_commentaire");
        $stmt->bindParam(':id_commentaire', $id_commentaire, PDO::PARAM_INT);
        $stmt->execute();
    }



}
include 'app/vue/view_commentaire.php';
