<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Persona;

class Personas extends Controller
{
    public function index()
    {
        $person = new Persona();
        $datos['persons']=$person->orderBy('CI', 'ASC')->findAll();
        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        return view('persona/listar', $datos);
    }

    public function crear(){

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');

        return view('persona/crear', $datos);
    }

    public function guardar(){
        $person = new Persona();
        $datos=[
            'CI'=>$this->request->getVar('ci'),
            'NOMBRE_COMPLETO'=>$this->request->getVar('nom'),
            'FECHA_NAC'=>$this->request->getVar('fec'),
            'TELEFONO'=>$this->request->getVar('tel'),
            'DEPARTAMENTO'=>$this->request->getVar('depa')
            
        ];

        $person->insert($datos);
        return $this->response->redirect(site_url('/listar'));

    }

    public function eliminar($CI=null){
        $person = new Persona();
        $datosPerson=$person->where('CI',$CI)->first();
        $person->where('CI',$CI)->delete($CI);
        return $this->response->redirect(site_url('/listar'));
    }

    public function editar($CI=null){
        $person= new Persona();
        $datos['person']=$person->where('CI',$CI)->first();

        $datos['header']= view('template/header');
        $datos['footer']= view('template/footer');
        return view('persona/editar', $datos);
    }

    public function actualizar(){
        $person = new Persona();
        $datos=[
            
            'NOMBRE_COMPLETO'=>$this->request->getVar('nom'),
            'FECHA_NAC'=>$this->request->getVar('fec'),
            'TELEFONO'=>$this->request->getVar('tel'),
            'DEPARTAMENTO'=>$this->request->getVar('depa')
        ];
        $CI=$this->request->getVar('ci');
        $person->update($CI,$datos);
        return $this->response->redirect(site_url('/listar'));

    }
}
