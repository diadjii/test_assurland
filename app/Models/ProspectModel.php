<?php


namespace App\Models;


use CodeIgniter\Model;

class ProspectModel extends Model
{
    protected $table         = 'prospects';
    protected $allowedFields = [
        'nom_entreprise', 'site', 'adresse','phone','activite','chiffre_affaire','environnement','id_user'
    ];
    protected $returnType    = 'App\Entities\Prospect';
    protected $useTimestamps = true;
}