<?php
class Compte extends Model{
    // Attributs de la classe
    private $id_compte;
    private $email;
    private $password;

    // Constructeur pour initialiser les attributs
    public function __construct($id_compte, $usesrname, $password) {
        $this->id_compte = $id_compte;
        $this->email = $email;
        $this->password = $password;
    }

    // Getter et Setter pour l'attribut ID_compte
    public function getIdCompte() {
        return $this->id_compte;
    }

    public function setIdCompte($id_compte) {
        $this->id_compte = $id_compte;
    }

    // Getter et Setter pour l'attribut email
    public function getemail() {
        return $this->email;
    }

    public function setemail($email) {
        $this->email = $email;
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
        echo "email: " . $this->email . "<br>";
        echo "Password: " . $this->password . "<br>";
    }
}
?>
