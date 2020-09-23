<?php 
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    Class ClientCourantModel extends Model
    {
        protected $table = 'clientcourant';
        protected $allowedFields = ['nom', 'prenom', 'dateNaiss', 'cni', 'salaire', 'telephone', 'sexe', 'adresseClient'];
    } 

?>         