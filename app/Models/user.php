<?php

class User {
    // Attributs de la classe
    private int $id_user;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $tele;

    // Constructeur
    public function __construct(int $id_user, string $nom, string $prenom, string $email, string $tele) {
        $this->id_user = $id_user;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tele = $tele;
    }
    
    // Getters
    public function getIdUser(): int {
        return $this->id_user;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTele(): string {
        return $this->tele;
    }

    // Setters
    public function setIdUser(int $id_user): void {
        $this->id_user = $id_user;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setTele(string $tele): void {
        $this->tele = $tele;
    }

    // Méthode pour afficher les informations de l'utilisateur
    public function afficherInfos(): void {
        echo "ID: " . $this->id_user . "\n";
        echo "Nom: " . $this->nom . "\n";
        echo "Prénom: " . $this->prenom . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Téléphone: " . $this->tele . "\n";
    }
}

// Exemple d'utilisation
$user = new User(1, "Dupont", "Jean", "jean.dupont@example.com", "0601020304");
$user->afficherInfos();

?>
