<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'tele', 'password'];

    // Attributs de la classe
    private int $id_user;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $tele;
    private string $password;

    // Constructeur
    public function __construct(int $id_user = null, string $first_name = null, string $last_name = null, string $email = null, string $tele = null, string $password = null) {
        parent::__construct();
        $this->id_user = $id_user;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->tele = $tele;
        $this->password = $password;
    }

    // Create method to add a user to the database
    public function create(array $data)
    {
        return $this->insert($data);
    }
}