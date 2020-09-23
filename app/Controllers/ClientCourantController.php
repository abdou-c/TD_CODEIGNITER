<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientCourantModel;
use App\Models\CompteCourantModel;

class ClientCourantController extends Controller
{
    public function insertClientCourant()
    {
        helper(['form', 'url']);

        //insertion Client
        
        $Client = new ClientCourantModel();

        $data = [
            'nom' => $this->request->getVar('nomClient'),
            'prenom'  => $this->request->getVar('prenomClient'),
            'dateNaiss' => $this->request->getVar('dateNaissCourant'),
            'cni' => $this->request->getVar('numCniClient'),
            'telephone' => $this->request->getVar('callClient'),
            'sexe' => $this->request->getVar('sexeCourant'),
            'adressemail' => $this->request->getVar('adresseClient'),
            'salaire' => $this->request->getVar('Salaire')
        ];

        $save = $Client->insert($data);

        //insertion Compte

        $Compte = new CompteCourantModel();

        $data = [
            'numero' => $this->request->getVar('numberCompte'),
            'solde'  => $this->request->getVar('solde'),
            'dateOuv' => $this->request->getVar('dateOuv'),
            'agios' => $this->request->getVar('agios'),

        ];

        $save = $Compte->insert($data);

        return redirect()->to(base_url('/'));
    }
}
