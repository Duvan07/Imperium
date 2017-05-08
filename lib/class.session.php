<?php

class session {

  protected function getSession(): session {
    return new session();
  }

  public function get(string $variable) {
    return $_SESSION[$variable];
  }

  public function set(string $variable, $value) {
    $_SESSION[$variable] = $value;
  }

  public function has(string $variable) {
    return isset($_SESSION[$variable]);
  }

  public function delete(string $variable) {
    unset($_SESSION[$variable]);
  }

}
