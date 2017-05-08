<?php

abstract class controller {

  /**
   * Variable con objeto de configuración
   * @access private
   * @var myConfig
   */
  private $config;

  /**
   * Array con las variables que pasan del controlador a la vista
   * @var array
   */
  private $params;

  /**
   * Nombre de la vista a usar por el controlador
   * @var string
   */
  private $view;

  /**
   * Objeto para el manejo de sesiones
   * @var session
   */
  private $session;

  /**
   * Metodo principal abstracto a implementar en los controladores del sistemas
   */
  abstract function main(request $request);

  public function __construct(config $config, session $session) {
    $this->config = $config;
    $this->session = $session;
    $this->params = array();
  }

  public function getConfig(): myConfig {
    return $this->config;
  }

  public function getParams(): array {
    return $this->params;
  }

  public function setParam(string $param, $value) {
    $this->params[$param] = $value;
  }

  public function getView(): string {
    return $this->view;
  }

  public function setView(string $view) {
    $this->view = $view;
  }

  public function getSession(): session {
    return $this->session;
  }

}
