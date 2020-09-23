<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientModel;
use App\Models\CompteSimpleModel;

class ClientSimpleController extends Controller
{
    public function insertClientSimple()
    {
        helper(['form', 'url']);

        //insertion Client
        
        $Client = new ClientModel();

        $data = [
            'nom' => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'dateNaiss' => $this->request->getVar('dateNaiss'),
            'cni' => $this->request->getVar('numCni'),
            'telephone' => $this->request->getVar('telephone'),
            'sexe' => $this->request->getVar('sexe'),
            'adressemail' => $this->request->getVar('adresse')
        ];

        $save = $Client->insert($data);

        //insertion Compte

        $Compte = new CompteSimpleModel();

        $data = [
            'numero' => $this->request->getVar('numCompte'),
            'solde'  => $this->request->getVar('solde'),
            'fraisOuv' => $this->request->getVar('fraisOuv'),
            'dateOuv' => $this->request->getVar('dateOuv'),
            'remuneration' => $this->request->getVar('remuneration'),
        ];

        $save = $Compte->insert($data);

        return redirect()->to(base_url('/'));
    }
}
