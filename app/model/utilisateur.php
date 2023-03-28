<?php

class Utilisateur
{
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $password;
    private $image;
    private $statut = false;
    private $role = 1;

    public function __construct($nom, $prenom, $mail, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->password = $password;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function getRole()
    {
        return $this->role;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}
