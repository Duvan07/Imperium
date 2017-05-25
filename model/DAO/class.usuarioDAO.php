<?php

class usuarioDAO extends dataSource implements IUsuario {

  public function delete($id) {
    $sql = 'DELETE FROM mer_usuario WHERE id = :id';
    $params = array(
        ':id' => $id
    );
    return $this->execute($sql, $params);
  }

  public function insert(\usuario $usuario) {
    $sql = 'INSERT INTO mer_usuario (usu_id, usu_cedula, usu_nombres, usu_apellidos, usu_telefono, usu_alias, usu_contraseña, usu_correo) VALUES (:id, :ced, :nom, :ape, :tel, :alias, :contra, :correo)';
    $params = array(
        ':id' => $usuario->getId(),
        ':ced' => $usuario->getCedula(),
        ':nom' => $usuario->getNombres(),
        ':ape' => $usuario->getApellidos(),
        ':tel' => $usuario->getTelefono(),
        ':alias' => $usuario->getAlias(),
        ':contra' => $usuario->getContrasena(),
        ':correo' => $usuario->getCorreo()
    );
    return $this->execute($sql, $params);
  }

  public function select() {
    $sql = 'SELECT usu_id, usu_cedula, usu_nombres, usu_apellidos, usu_telefono, usu_alias, usu_contraseña, usu_correo FROM mer_usuario';
    return $this->query($sql);
  }

  public function selectById($id) {
    $sql = 'SELECT usu_id, usu_cedula, usu_nombres, usu_apellidos, usu_telefono, usu_alias, usu_contraseña, usu_correo FROM mer_usuario WHERE usu_id = :id';
    $params = array(
        ':id' => $id
    );
    return $this->query($sql, $params);
  }

  public function update(\usuario $usuario) {
    $sql = 'UPDATE mer_usuario SET usu_id = :id, usu_cedula = :ced, usu_nombres = :nom, usu_apellidos = :ape, usu_telefono = :tel, usu_alias = :alias, usu_contrasena = :contra, usu_correo :correo WHERE id = :id';
    $params = array(
        ':id' => $usuario->getId(),
        ':ced' => $usuario->getCedula(),
        ':nom' => $usuario->getNombres(),
        ':ape' => $usuario->getApellidos(),
        ':tel' => $usuario->getTelefono(),
        ':alias' => $usuario->getAlias(),
        ':contra' => $usuario->getContrasena(),
        ':correo' => $usuario->getCorreo()
    );
    return $this->execute($sql, $params);
  }

}
