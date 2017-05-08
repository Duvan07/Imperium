<?php

class login extends controllerExtended {
  
  public function main(\request $request) {
    $this->loadTableUsuario();
    
    $user = $request->getQuery('usu');
    $password = hash($this->getConfig()->getHash(), $request->getQuery('pass'), false);

    $usuarioDAO = new usuarioDAOExt($this->getConfig());
    $rsp = array (
        'code' => 200,
        'usuario' => $usuarioDAO->search($user, $password)
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