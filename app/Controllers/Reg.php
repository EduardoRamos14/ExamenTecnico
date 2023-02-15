<?php
namespace App\Controllers;
use App\Models\RegModel;
use App\Controllers\BaseController;

class Reg extends BaseController{
    
    public function new(){
        session();
        return view('Registro/new');
    }

   

    public function create(){
        $reg=new RegModel();
            $reg->insert(
            [
                'nombre'=>$this->request->getPost('nombre'),
                'edad'=>$this->request->getPost('edad'),
                'genero'=>$this->request->getPost('genero'),
                'direccion'=>$this->request->getPost('direccion'),
                'pais'=>$this->request->getPost('pais'),
                'estado'=>$this->request->getPost('estado'),
        ]);
        
        //$this->upload();

        return redirect()->to('/inicio')->with('message','Registro Insertado:');
    }
    

}
