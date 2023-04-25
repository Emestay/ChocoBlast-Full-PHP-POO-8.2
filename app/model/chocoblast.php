<?php

class Chocoblast {
    private int $id_chocoblast;
    private string $slogan_chocoblast;
    private string $date_chocoblast;
    private bool $statut_chocoblast;
    private int $cible_chocoblast;
    private int $auteur_chocoblast;

    public function __construct(int $id_chocoblast, string $slogan_chocoblast, string $date_chocoblast, bool $statut_chocoblast, int $cible_chocoblast, int $auteur_chocoblast) {
        $this->id_chocoblast = $id_chocoblast;
        $this->slogan_chocoblast = $slogan_chocoblast;
        $this->date_chocoblast = $date_chocoblast;
        $this->statut_chocoblast = $statut_chocoblast;
        $this->cible_chocoblast = $cible_chocoblast;
        $this->auteur_chocoblast = $auteur_chocoblast;
    }

    // Getters
    public function getIdChocoblast(): int {
        return $this->id_chocoblast;
    }

    public function getSloganChocoblast(): string {
        return $this->slogan_chocoblast;
    }

    public function getDateChocoblast(): string {
        return $this->date_chocoblast;
    }

    public function getStatutChocoblast(): bool {
        return $this->statut_chocoblast;
    }

    public function getCibleChocoblast(): int {
        return $this->cible_chocoblast;
    }

    public function getAuteurChocoblast(): int {
        return $this->auteur_chocoblast;
    }

    // Setters
    public function setIdChocoblast(int $id_chocoblast): void {
        $this->id_chocoblast = $id_chocoblast;
    }

    public function setSloganChocoblast(string $slogan_chocoblast): void {
        $this->slogan_chocoblast = $slogan_chocoblast;
    }

    public function setDateChocoblast(string $date_chocoblast): void {
        $this->date_chocoblast = $date_chocoblast;
    }

    public function setStatutChocoblast(bool $statut_chocoblast): void {
        $this->statut_chocoblast = $statut_chocoblast;
    }

    public function setCibleChocoblast(int $cible_chocoblast): void {
        $this->cible_chocoblast = $cible_chocoblast;
    }

    public function setAuteurChocoblast(int $auteur_chocoblast): void {
        $this->auteur_chocoblast = $auteur_chocoblast;
    }
}