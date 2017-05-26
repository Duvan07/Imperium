<?php

class usuarioDAOExt extends usuarioDAO {

    public function agregar(\usuario $usuario) {
        $sql = 'INSERT INTO mer_usuario (usu_id, usu_cedula, usu_nombres, usu_apellidos, usu_telefono, usu_alias, usu_contraseña, usu_correo, usu_rol) VALUES (:id, :ced, :nom, :ape, :tel, :alias, :contra, :correo, :rol)';
        $params = array(
            ':id' => $usuario->getId(),
            ':ced' => $usuario->getCedula(),
            ':nom' => $usuario->getNombres(),
            ':ape' => $usuario->getApellidos(),
            ':tel' => $usuario->getTelefono(),
            ':alias' => $usuario->getAlias(),
            ':contra' => $usuario->getContrasena(),
            ':correo' => $usuario->getCorreo(),
            ':rol' => $usuario->getRol()
        );
        return $this->execute($sql, $params);
    }

}
