<?php

class identificar extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadTableUsuario();

            $user = $request->getParam('usuario');
            $password = hash($this->getConfig()->getHash(), $request->getParam('contrasena'), false);

            $usuarioDAO = new usuarioDAOExt($this->getConfig());
            $respuesta1 = $usuarioDAO->buscar($user, $password);
            $rsp = array(
                'code' => (count($respuesta1) > 0) ? 200 : 500,
                'usuario' => $respuesta1
            );

            $this->setParam('json', $rsp);
            $this->setView('json');
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function loadTableUsuario() {
        require $this->getConfig()->getPath() . 'model/table/table.usuario.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.usuario.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.usuarioDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.usuarioDAOExt.php';
    }

}
