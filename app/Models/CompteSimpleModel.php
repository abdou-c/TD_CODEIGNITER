<?php 
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    Class CompteSimpleModel extends Model
    {
        protected $table = 'compte';
        protected $allowedFields = ['numero', 'solde', 'fraisOuv', 'dateOuv', 'remuneration'];
    } 

?>     