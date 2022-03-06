<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

    public function get($id)
    {
        $res = $this->db->query("SELECT * FROM usuarios WHERE id='{$id}'");
        return $res->result();
    }

    public function getAll()
    {
        $res = $this->db->query("SELECT * FROM usuarios");
        return $res->result();
    }
    
    
    public function create($nombre, $correo, $password_user)
    {
        $consulta=$this->db->query("INSERT INTO usuarios(nombre,correo,password_user) VALUES('{$nombre}','{$correo}','{$password_user}' )");
        
        if($consulta) return ['status' => 201,'message' => 'Datos guardados exitosamente.'];
        
        return ['status' => 400,'message' => 'Nop.'];  
    }

    public function update($nombre, $correo, $id)
    {
        $consulta=$this->db->query("UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id='$id' ");
        
        if($consulta) return ['status' => 201,'message' => 'Datos Actualizados exitosamente.'];
        
        return ['status' => 400,'message' => 'Nop.']; 
    }

}