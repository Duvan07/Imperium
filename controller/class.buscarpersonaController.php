<?php

class buscarpersona extends controllerExtended{
    
    public function main(\request $request) {
        try{
            $this->loadTablePersona();
            
            $nuevapersonaDAO = new personaDAOExt($this->getConfig());
            $respuesta1 = $nuevapersonaDAO->search($request->getParam('texto'));            
            $respuesta2 = array(
                    'code' => (count($respuesta1) > 0) ? 200 : 500,
                    'data' => $respuesta1,
                    'mensaje' => 'personaencontrada'
            );
            
            $this->setParam('rsp', $respuesta2);
            $this->setView('json');
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    private function loadTablePersona() {
    require $this->getConfig()->getPath() . 'model/table/table.nuevapersona.php';
    require $this->getConfig()->getPath() . 'model/interface/interface.nuevapersona.php';
    require $this->getConfig()->getPath() . 'model/DAO/class.nuevapersonaDAO.php';
    require $this->getConfig()->getPath() . 'model/extended/class.personaDAOExt.php';
  }

}

