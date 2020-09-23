<?php 
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    Class CompteBloqueModel extends Model
    {
        protected $table = 'compteBloque';
        protected $allowedFields = ['numero', 'solde', 'dateOuv', 'datefermeture', 'remuneration', 'fraisouv'];
    } 

?>         