<?php

// Inclure le modèle
require_once 'models/User.php';

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // Afficher le formulaire de connexion
    public function index()
    {
        $this->view->render('login');
    }

    // Traiter la soumission du formulaire de connexion
    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupérer les données du formulaire
            $username = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Vérification des identifiants
            $user = new User();
            $isAuthenticated = $user->checkCredentials($username, $password);

            if ($isAuthenticated) {
                // Rediriger vers la page d'accueil ou dashboard
                header('Location: /home');
                exit();
            } else {
                // Afficher un message d'erreur
                $this->view->errorMessage = 'Identifiants incorrects';
                $this->view->render('login');
            }
        }
    }
}
?>
