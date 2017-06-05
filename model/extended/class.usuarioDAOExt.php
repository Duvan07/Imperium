<?php

class usuarioDAOExt extends usuarioDAO {

    public function agregar(\usuario $usuario) {
        $sql = 'INSERT INTO mer_usuario (usu_id, usu_cedula, usu_nombres, usu_apellidos, usu_telefono, usu_alias, usu_contraseña, usu_correo, rol_id) VALUES (:id, :ced, :nom, :ape, :tel, :alias, :contra, :correo, :rol_id)';
        $params = array(
            ':id' => $usuario->getId(),
            ':ced' => $usuario->getCedula(),
            ':nom' => $usuario->getNombres(),
            ':ape' => $usuario->getApellidos(),
            ':tel' => $usuario->getTelefono(),
            ':alias' => $usuario->getAlias(),
            ':contra' => $usuario->getContrasena(),
            ':correo' => $usuario->getCorreo(),
            ':rol_id' => $usuario->getRol_id()
        );
        return $this->execute($sql, $params);
    }
    
    
     public function buscar($usuario, $contrasena) {
        $sql = 'SELECT usu_id, usu_cedula, usu_nombres, usu_apellidos, usu_telefono, usu_alias, usu_contrasena, usu_correo, rol_id FROM mer_usuario WHERE usu_alias = :alias AND usu_contrasena = :password';
        $params = array(
            ':alias' => $usuario,
            ':password' => $contrasena,
        );

        return $this->query($sql, $params);
    }


}
