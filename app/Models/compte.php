<?php
class Compte {
    // Attributs de la classe
    private $id_compte;
    private $username;
    private $password;

    // Constructeur pour initialiser les attributs
    public function __construct($id_compte, $username, $password) {
        $this->id_compte = $id_compte;
        $this->username = $username;
        $this->password = $password;
    }

    // Getter et Setter pour l'attribut ID_compte
    public function getIdCompte() {
        return $this->id_compte;
    }

    public function setIdCompte($id_compte) {
        $this->id_compte = $id_compte;
    }

    // Getter et Setter pour l'attribut Username
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    // Getter et Setter pour l'attribut Password
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Méthode pour afficher les informations du compte
    public function afficherDetails() {
        echo "ID Compte: " . $this->id_compte . "<br>";
        echo "Username: " . $this->username . "<br>";
        echo "Password: " . $this->password . "<br>";
    }
}
?>
