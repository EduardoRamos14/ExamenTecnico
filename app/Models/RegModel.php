<?php 
namespace App\Models;
use CodeIgniter\Model;

class RegModel extends Model{

    protected $table ='registro';
    protected $primaryKey ='id';
    protected $allowedFields=['nombre',
        'edad',
        'genero',
        'direccion',
        'pais',
        'estado'];


}
