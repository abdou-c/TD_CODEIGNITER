<?php 
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    Class ClientBloqueModel extends Model
    {
        protected $table = 'clientbloque';
        protected $allowedFields = ['nom', 'prenom', 'dateNaiss', 'numcni', 'numtel', 'sexe', 'mail'];
    } 

?>         