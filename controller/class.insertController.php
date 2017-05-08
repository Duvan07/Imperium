<?php

class insert extends controllerExtended {
  
  public function main(\request $request) {
    $this->loadTableUsuario();
    $usuario = new usuario();
    $usuario->setUsuario('brandon');
    $usuario->setContrasena('1245', $this->getConfig()->getHash());
    $usuarioDAO = new usuarioDAOExt($this->getConfig());
    $usuarioDAO->insert($usuario);
    
    $rsp = array (
        'code' => 200,
        'msg' => 'El usuario fue insertado exitosamente'
    );

    $this->setParam('json', $rsp);
    $this->setView('json');
  }
  
  private function loadTableUsuario() {
    require $this->getConfig()->getPath() . 'model/table/table.usuario.php';
    require $this->getConfig()->getPath() . 'model/interface/interface.usuario.php';
    require $this->getConfig()->getPath() . 'model/DAO/class.usuarioDAO.php';
    require $this->getConfig()->getPath() . 'model/class.usuarioDAOExt.php';
  }

}