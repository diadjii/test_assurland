<?php
namespace App\Controllers;

use App\Entities\Prospect;
use App\Helpers\SessionManager;
use App\Models\ProspectModel;
use CodeIgniter\Controller;

class ProspectController extends  Controller
{
    private $prospectModel;

    public function __construct()
    {
        $this->prospectModel = new ProspectModel();
    }

    public function create()
    {
        $nomEntreprise = $this->request->getVar('nom-entreprise');
        $siteEntreprise = $this->request->getVar('site-entreprise');
        $adresseEntreprise = $this->request->getVar('adresse-entreprise');
        $telEntreprise = $this->request->getVar('tel-entreprise');
        $activiteEntreprise = $this->request->getVar('activite-entreprise');
        $chiffreAffaireEntreprise = $this->request->getVar('chiffre-affaire');
        $envProspect = $this->request->getVar('env-prospect');
        $dirigeant = $this->request->getVar('dirigeant');

        $prospectEntity = new Prospect();
        $prospectEntity->nom_entreprise = $nomEntreprise;
        $prospectEntity->site = $siteEntreprise;
        $prospectEntity->adresse = $adresseEntreprise;
        $prospectEntity->phone = $telEntreprise;
        $prospectEntity->activite = $activiteEntreprise;
        $prospectEntity->chiffre_affaire = $chiffreAffaireEntreprise;
        $prospectEntity->environnement = $envProspect;
        $session = new SessionManager();

        $prospectEntity->id_user = $_SESSION['id'];

        try {
            $this->prospectModel->insert($prospectEntity);
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }
}