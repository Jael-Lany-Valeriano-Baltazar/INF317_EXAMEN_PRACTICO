<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Persona extends Model{
        protected $table = 'PERSONA';

        protected $primaryKey = 'CI';
        protected $allowedFields = ['CI', 'NOMBRE_COMPLETO', 'FECHA_NAC', 'TELEFONO', 'DEPARTAMENTO'];
    }