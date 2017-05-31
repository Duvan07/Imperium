<?php

class registrarPersona extends controllerExtended {

  public function main(\request $request) {
    try {
      $this->loadTablePersona();
      $nuevapersona = new nuevapersona();
      $nuevapersona->setCedula($request->getParam('cedula'));
      $nuevapersona->setNombres($request->getParam('nombre'));
      $nuevapersona->setApellidos($request->getParam('apellido'));
      $nuevapersona->setGenero($request->getParam('genero'));
      $nuevapersona->setFenacimiento($request->getParam('fechanaci'));
      $nuevapersona->setEdad($request->getParam('edad'));
      $nuevapersona->setLugarnacimiento($request->getParam('lugarnaci'));
      $nuevapersona->setNacionalidad($request->getParam('nacionalidad'));
      $nuevapersona->setLugarresidencia($request->getParam('lugarresidencia'));
      $nuevapersona->setDireccionresidencia($request->getParam('direccionresidencia'));
      $nuevapersona->setNotelefono($request->getParam('telefono'));
      $nuevapersona->setCorreo($request->getParam('correo'));
      $nuevapersona->setFecingresoempresa($request->getParam('fechaingreso'));
      $nuevapersona->setAntiguedad($request->getParam('antiguedad'));
      $nuevapersona->setCargo($request->getParam('cargo'));
      $nuevapersona->setCentrotrabajo($request->getParam('centrotrabajo'));
      $nuevapersona->setArea($request->getParam('area'));
      $nuevapersona->setTurno($request->getParam('turnotrabajo'));
      $nuevapersona->setSalario($request->getParam('salario'));
      $nuevapersona->setTipovinculacion($request->getParam('tipovinculacion'));
      $nuevapersona->setArl($request->getParam('arl'));
      $nuevapersona->setEps($request->getParam('eps'));
      $nuevapersona->setAfp($request->getParam('afp'));
      $nuevapersona->setEscolaridad($request->getParam('escolaridad'));
      $nuevapersona->setProfesion($request->getParam('profesion'));
      $nuevapersona->setEstadocivi($request->getParam('estadocivil'));
      $nuevapersona->setRaza($request->getParam('raza'));
      $nuevapersona->setNohijos($request->getParam('numerohijos'));
      $nuevapersona->setOtrasperacargo($request->getParam('personasacargo'));
      $nuevapersona->setEstratosocial($request->getParam('estratosocial'));
      $nuevapersona->setConcentimientoformado($request->getParam('consentimiento'));

      $personaDAO = new personaDAOExt($this->getConfig());
      $respuesta1 = $personaDAO->insert($nuevapersona);
      $respuesta2 = array(
          'code' => ($respuesta1 > 0) ? 200 : 500,
          'data' => $respuesta1
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
