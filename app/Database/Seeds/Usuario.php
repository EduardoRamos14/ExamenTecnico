<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        /*$nombre="administrador";
        $usuario="administrador";
        $password= password_hash("admin", PASSWORD_DEFAULT);
        $type="admin";

        ---------------------------------------------------------
        $nombre="Compras";
        $usuario="JUD Compras";
        $password= password_hash("compras321", PASSWORD_DEFAULT);
        $type="compras";

        -----------------------------------------------------------
        $nombre="Almacenes";
        $usuario="JUD Almacenes e inventarios";
        $password= password_hash("almacenes321", PASSWORD_DEFAULT);
        $type="almacenes";
        */

        $nombre="Abastecimientos";
        $usuario="JUD Abastecimientos y servicios";
        $password= password_hash("abastecimientos321", PASSWORD_DEFAULT);
        $type="abastecimientos";

        $data = [
            'nombre'    => $nombre, 
            'usuario' => $usuario,
            'password' => $password,
            'type'=> $type
        ];
        $this->db->table('admin')->insert($data);
    }
}
