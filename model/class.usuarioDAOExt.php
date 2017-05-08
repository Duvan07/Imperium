<?php

class usuarioDAOExt extends usuarioDAO {

  public function search($user, $password) {
    $sql = 'SELECT id, usuario FROM usuario WHERE usuario = :user AND contrasena = :pass';
    $params = array(
        ':user' => $user,
        ':pass' => $password
    );
    return $this->query($sql, $params);
  }

}
