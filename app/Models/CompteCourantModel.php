<?php 
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    Class CompteCourantModel extends Model
    {
        protected $table = 'comptecourant';
        protected $allowedFields = ['numero', 'solde', 'dateOuv', 'agios'];
    } 

?>         