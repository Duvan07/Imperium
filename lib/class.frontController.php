<?php

class frontController {

  /**
   *
   * @var myConfig
   */
  private $config;

  /**
   * 
   * @var controller
   */
  private $controller;

  /**
   * Variable que guarda los parametros pasados por la URL de forma amigable
   * @var array
   */
  private $paramsURL = array();

  public function __construct(myConfig $config) {
    $this->config = $config;
    $this->friendURL();
  }

  protected function getConfig(): myConfig {
    return $this->config;
  }

  protected function setConfig(myConfig $config) {
    $this->config = $config;
  }

  public function run() {
    try {
      $this->loadLibs();
      $request = $this->loadRequest();
      $session = new session();
      $controller = new $this->controller($this->getConfig(), $session);
      $controller->main($request);
      $view = new view($this->getConfig(), $controller->getView(), $controller->getParams());
      $view->render();
    } catch (PDOException $exc) {
      throw new Exception($exc->getMessage(), $exc->getCode(), $exc->getPrevious());
    }
  }

  private function friendURL() {
    $datos = explode('/', filter_input(INPUT_SERVER, 'PATH_INFO'));
    if (isset($datos[1]) === false) {
      exit();
    }
    $this->controller = $datos[1];
    unset($datos[0], $datos[1]);
    if (is_array($datos) === true and count($datos) > 0) {
      $this->paramsURL = array_values($datos);
    }
  }

  private function loadLibs() {
    require $this->getConfig()->getPath() . 'lib/class.dataSource.php';
    require $this->getConfig()->getPath() . 'lib/class.controller.php';
    require $this->getConfig()->getPath() . 'lib/class.request.php';
    require $this->getConfig()->getPath() . 'lib/class.session.php';
    require $this->getConfig()->getPath() . 'lib/class.view.php';
    require $this->getConfig()->getPath() . 'config/class.controllerExtended.php';
    require $this->getConfig()->getPath() . 'controller/class.' . $this->controller . 'Controller.php';
  }

  private function loadRequest(): request {
    $getTMP = (is_array(filter_input_array(INPUT_GET)) === true) ? filter_input_array(INPUT_GET) : array();
    $get = array_merge($this->paramsURL, $getTMP);
    $post = filter_input_array(INPUT_POST);
    $cookie = filter_input_array(INPUT_COOKIE);
    $files = $_FILES;
    return new request($get, $post, $cookie, $files);
  }

}
