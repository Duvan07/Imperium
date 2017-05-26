<?php

class registarUsuario extends controllerExtended {

    public function main(\request $request) {

        try {
            $this->loadTableUsuario();

            $usuario = new usuario();
            $usuario->setCedula($request->getParam('cedula'));
            $usuario->setNombres($request->getParam('nombres'));
            $usuario->setApellidos($request->getParam('apellidos'));
            $usuario->setTelefono($request->getParam('telefono'));
            $usuario->setAlias($request->getParam('alias'));
            $usuario->setContrasena($request->getParam('contrasena'), $this->getConfig()->getHash());
            $usuario->setCorreo($request->getParam('correo'));
            $usuario->setRol($request->getParam('rol'));

            $usuarioDAO = new usuarioDAOExt($this->getConfig());
            $respuesta1 = $usuarioDAO->insert($usuario);
            $respuesta2 = array(
                'code' => ($respuesta1 > 0) ? 200 : 500,
                'data' => $respuesta1
            );

            $this->setParam('rsp', $respuesta2);
            $this->getView('imprimirJson');
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    private function loadTableUsuario() {
        require $this->getConfig()->getPath() . 'model/table/table.usuario.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.usuario.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.usuarioDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.usuarioDAOExt';
    }

}
