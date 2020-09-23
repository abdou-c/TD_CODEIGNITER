<?php 
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    Class ClientModel extends Model
    {
        protected $table = 'client';
        protected $allowedFields = ['nom', 'prenom', 'dateNaiss', 'cni', 'salaire', 'telephone', 'sexe', 'adressemail'];
    } 

?>            