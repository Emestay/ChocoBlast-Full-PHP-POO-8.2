<?php

class Commentaire {
    private ?int $id_commentaire;
    private int $note_commentaire;
    private string $text_commentaire;
    private string $date_commentaire;
    private bool $statut_commentaire;
    private int $id_chocoblast;
    private int $auteur_commentaire;

    public function __construct(?int $id_commentaire, int $note_commentaire, string $text_commentaire, string $date_commentaire, bool $statut_commentaire, int $id_chocoblast, int $auteur_commentaire) {
        $this->id_commentaire = $id_commentaire;
        $this->note_commentaire = $note_commentaire;
        $this->text_commentaire = $text_commentaire;
        $this->date_commentaire = $date_commentaire;
        $this->statut_commentaire = $statut_commentaire;
        $this->id_chocoblast = $id_chocoblast;
        $this->auteur_commentaire = $auteur_commentaire;
    }

    public function getIdCommentaire(): int {
        return $this->id_commentaire;
    }

    public function setIdCommentaire(int $id_commentaire): void {
        $this->id_commentaire = $id_commentaire;
    }

    public function getNoteCommentaire(): int {
        return $this->note_commentaire;
    }

    public function setNoteCommentaire(int $note_commentaire): void {
        $this->note_commentaire = $note_commentaire;
    }

    public function getTextCommentaire(): string {
        return $this->text_commentaire;
    }

    public function setTextCommentaire(string $text_commentaire): void {
        $this->text_commentaire = $text_commentaire;
    }

    public function getDateCommentaire(): string {
        return $this->date_commentaire;
    }

    public function setDateCommentaire(string $date_commentaire): void {
        $this->date_commentaire = $date_commentaire;
    }

    public function getStatutCommentaire(): bool {
        return $this->statut_commentaire;
    }

    public function setStatutCommentaire(bool $statut_commentaire): void {
        $this->statut_commentaire = $statut_commentaire;
    }

    public function getIdChocoblast(): int {
        return $this->id_chocoblast;
    }

    public function setIdChocoblast(int $id_chocoblast): void {
        $this->id_chocoblast = $id_chocoblast;
    }

    public function getAuteurCommentaire(): int {
        return $this->auteur_commentaire;
    }

    public function setAuteurCommentaire(int $auteur_commentaire): void {
        $this->auteur_commentaire = $auteur_commentaire;
    }


}
