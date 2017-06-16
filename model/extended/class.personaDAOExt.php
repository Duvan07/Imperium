<?php

class personaDAOExt extends nuevapersonaDAO{
//put your code here
    public function search($text){
        $sql = 'SELECT per_id, per_cedula, per_nombres, per_apellidos, '
            . 'per_genero, per_fenacimiento, per_edad, per_lugarnacimiento,per_nacionalidad,per_lugarresidencia,per_notelefono, '
            . 'per_direccionresidencia, per_correo,per_fecingresoempresa,per_antiguedad,per_cargo,per_centrotrabajo,per_area,per_turno,per_salario, '
            . 'per_tipovinculacion, per_arl,per_eps,per_afp,per_escolaridad,per_profesion,per_estadocivi,per_raza,per_nohijos, per_otrasperacargo, '
            . 'per_estratosocial, per_conseninformado, per_deleted_at FROM mer_persona WHERE per_deleted_at IS NULL AND (per_nombres ilike :text or per_apellidos ilike :text)';
        $params = array(
                "text" => (string) "%" . $text . "%"
        );
        
        return $this->query($sql, $params);
    }
}
