<?php

class entradaysalida {

  private $id;
  private $horaentrada;
  private $horasalalmuerzo;
  private $horaentalmuerzo;
  private $horasalida;

  public function getId() {
    return $this->id;
  }

  public function getHoraentrada() {
    return $this->horaentrada;
  }

  public function getHorasalalmuerzo() {
    return $this->horasalalmuerzo;
  }

  public function getHoraentalmuerzo() {
    return $this->horaentalmuerzo;
  }

  public function getHorasalida() {
    return $this->horasalida;
  }

  
  public function setId($id) {
    $this->id = $id;
  }

  public function setHoraentrada($horaentrada) {
    $this->horaentrada = $horaentrada;
  }

  public function setHorasalalmuerzo($horasalalmuerzo) {
    $this->horasalalmuerzo = $horasalalmuerzo;
  }

  public function setHoraentalmuerzo($horaentalmuerzo) {
    $this->horaentalmuerzo = $horaentalmuerzo;
  }

  public function setHorasalida($horasalida) {
    $this->horasalida = $horasalida;
  }

}
