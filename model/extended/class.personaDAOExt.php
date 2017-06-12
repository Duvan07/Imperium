<?php

class personaDAOExt extends nuevapersonaDAO{
//put your code here
    public function search($text){
        $sql = "SELECT per_id, per_nombres, per_apellidos, per_cedula, per_notelefono, per_correo, per_direccionresidencia FROM mer_persona WHERE (per_nombres ilike :text or per_apellidos ilike :text)";
        $params = array(
                'text' => (string) "%" . $text . "%"
        );
        
        return $this->query($sql, $params);
    }
}
