<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientBloqueModel;
use App\Models\CompteBloqueModel;

class ClientBloqueController extends Controller
{
    public function insertClientBloque()
    {
        helper(['form', 'url']);

        //insertion Client
        
        $Client = new ClientBloqueModel();

        $data = [
            'nom' => $this->request->getVar('nameClient'),
            'prenom'  => $this->request->getVar('clientUsername'),
            'dateNaiss' => $this->request->getVar('dateNaissBloque'),
            'numcni' => $this->request->getVar('clientId'),
            'numtel' => $this->request->getVar('telephoneClient'),
            'sexe' => $this->request->getVar('sexeBloque'),
            'mail' => $this->request->getVar('clientMail'),
        ];

        $save = $Client->insert($data);

        //insertion Compte

        $Compte = new CompteBloqueModel();

        $data = [
            'numero' => $this->request->getVar('numberCompteBloque'),
            'solde'  => $this->request->getVar('soldeBloque'),
            'dateOuv' => $this->request->getVar('dateOuvertBloque'),
            'remuneration' => $this->request->getVar('remunerationBloque'),
            'fraisouv' => $this->request->getVar('fraisOuvBloque'),
            'datefermeture' => $this->request->getVar('dateFermetureBloque'),


        ];

        $save = $Compte->insert($data);

        return redirect()->to(base_url('/'));
    }
}
