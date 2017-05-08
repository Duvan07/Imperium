<?php

class request {

  private $get;
  private $post;
  private $cookie;
  private $files;

  public function __construct($get, $post, $cookie, $files) {
    $this->get = $get;
    $this->post = $post;
    $this->files = $files;
    $this->cookie = $cookie;
  }

  /**
   * Obtiene variable enviada por el método GET
   * @param string $variable
   * @return type
   */
  public function getQuery(string $variable) {
    return htmlspecialchars($this->get[$variable]);
  }

  /**
   * Obtiene variable eviada por el método POST
   * @param string $variable
   * @return type
   */
  public function getParam(string $variable) {
    return htmlspecialchars($this->post[$variable]);
  }

  public function getCookie($cookie): array {
    return $this->cookie[$cookie];
  }

  public function getFile($file): array {
    return $this->files[$file];
  }

}
